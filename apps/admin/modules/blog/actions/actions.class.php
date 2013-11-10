<?php
/**
 * blog actions.
 *
 * @package    Golf
 * @subpackage blog
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class blogActions extends sfActions
{
    public function executeIndex ( sfWebRequest $request )
    {
        $this->form = new blogsForm();
        unset( $this->errors);
        if( $request->isMethod('put') ){
            $this->valori_form = $request->getParameter( $this->form->getName() );
            $this->errors = $this->processArticle( $request, $this->form );
            if( $this->errors == "" ) $this->form = new blogsForm();
        }
        $this->articles = blogsTable::getArticles();
    }
    
    public function executeGetArticle ( sfWebRequest $request )
    {
        $article = blogsTable::getArticle( $request->getParameter("id") );
        if( $article instanceof blogs ) $this->renderText( json_encode( array( "success" => "true", "article" => $article->toArray() ) ) );
        else $this->renderText( json_encode( array( "success" => "false" ) ) );
        return sfView::NONE;
    }
    
    public function executeSetActivate ( sfWebRequest $request )
    {
        $article = blogsTable::getArticle( $request->getParameter("id") );
        if( $article instanceof blogs ){
            $act = $article->getActive() == 1 ? 0 : 1;
            $article->setActive( $act );
            $article->save();
            $this->renderText( json_encode( array( "success" => "true", "isActive" => $act == 1 ? "true" : "false" ) ) );
        }
        else $this->renderText( json_encode( array( "success" => "false" ) ) );
        return sfView::NONE;
    }
    
    public function executeDeleteArticle ( sfWebRequest $request )
    {
        $article = blogsTable::getArticle( $request->getParameter("id") );
        if( $article instanceof blogs ){
            $article->setDeleted( 1 );
            $article->save();
            $this->renderText( json_encode( array( "success" => "true" ) ) );
        }
        else $this->renderText( json_encode( array( "success" => "false" ) ) );
        return sfView::NONE;
    }
    
    protected function processArticle ( sfWebRequest $request, sfForm $form )
    {
        $valori_form = $request->getParameter( $form->getName() );
        $errors = "";
        $form->bind( $valori_form, $request->getFiles( $form->getName() ) );
        if( $form->isValid() )
        {
            if( (int)$valori_form["bid"] > 0 )
            {
                $article = blogsTable::getArticle( $valori_form['bid'] );
                if( $article instanceof blogs )
                {
                    $article->setTitle( $valori_form['title'] );
                    $article->setContent( $valori_form['content'] );
                    $article->setPublishDate( $valori_form['publish_date'] );
                    $article->save();
                }
                else
                {
                    $errors .= "Invalid article\n";
                }
            }
            else
            {   
                $article = new blogs();
                $article->setTitle( $valori_form['title'] );
                $article->setContent( $valori_form['content'] );
                $article->setPublishDate( $valori_form['publish_date'] );
                $article->save();
            }
        }
        else
        {
            foreach($form->getErrorSchema()->getErrors() as $key => $value) {
                if( $key == "title") $error .= "Title is requeired.\n";
                if( $key == "constent") $error .= "Content is requeired.\n";
                if( $key == "publish_date") $error .= "Publish date is requeired.\n";
            }
        }
        return $errors;
    }
    
}

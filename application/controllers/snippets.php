<?php

class Snippets_Controller extends Base_Controller {

	public $restful = true;      

	public function post_create()
    {
        $validation_errors = Snippet::validate(Input::get());

        if ( $validation_errors ) {
            return Redirect::to_route('new_snippet');
        } 

        $new_snippet = Snippet::create(array('snippet' => Input::get('snippet') ));

        if ( $new_snippet ){
            return Redirect::to_route('snippet', $new_snippet->id);
        }

        // TODO Else, If $new_snippet wasn't added for any reason bla bla bla.... 

    }    

	public function get_show($id)
    {
        $snippet = Snippet::find($id);

        if ( !$snippet ) return Redirect::to_route('new_snippet');

        return View::make('snippet.show', $snippet->to_array() );
    }

    public function get_fork($id)
    {
        $snippet = Snippet::find($id);

        // If no $snippet in DB redirect to new_snippet route 
        if( !$snippet ) return Redirect::to_route('new_snippet');

        return $this->get_new($snippet->snippet);
    }      
   

	public function get_new($default_snippet = '')
    {
       return View::make('snippet.new')
                ->with('snippet', $default_snippet);
    }    



}
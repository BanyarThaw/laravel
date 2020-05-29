<?php 
public function flash()
{
	session()->flash("message",'Receipe has created successfully!');
}
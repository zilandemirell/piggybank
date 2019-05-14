@extends('layouts.parentLayout.app')
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@section('content')
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <form id="tab">
            <label>Username</label>
            <input type="text" value={{$loggedUser->name}} class="input-xlarge">
            <label>Email</label>
            <input type="text" value={{$loggedUser->email}} class="input-xlarge">
            <label>Parent Priority</label>
            <textarea rows="3" class="input-xlarge" readonly>
                {{$loggedUser->isParent==true?"You have parent priority": "You don't have parent priority"}} 
            </textarea>
            <label> <b>Click here to open the gate and empty the vault</b> </label>
            <a href="#" class="btn btn-rounded btn-large btn-info">Empty the Vault</a>
        </form>
      </div>
  </div>
</div> 
@endsection

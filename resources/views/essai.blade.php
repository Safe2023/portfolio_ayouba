@extends('layouts.header')

@section('content')

<style>
    .contact-section .contact-info p {
  font-weight: 600;
  color: #000000;
  margin-bottom: 0; }
  .contact-section .contact-info p a {
    color: #1a1a1a; }
  .contact-section .contact-info p span {
    display: block;
    font-size: 16px;
    font-weight: 400;
    color: #999999; }

.contact-section .contact-info .icon {
  margin-top: 10px; }
  .contact-section .contact-info .icon span {
    font-size: 20px;
    color: #1089ff; }

@media (min-width: 992px) {
  .contact-section .contact-info .border-height {
    border-left: 1px solid rgba(0, 0, 0, 0.1);
    border-right: 1px solid rgba(0, 0, 0, 0.1); } }

.contact-section .contact-form {
  width: 100%; }

</style>
<section class="hero-wrap hero-wrap-2 js-fullheight" >
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Menu <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contactez-nous</h1>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://0022967448799">+ 229 67448799</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="atmaxtransport@gmail.com">atmaxtransport@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre Nom ">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Votre Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Sujet">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer votre message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
       
    </section>
@endsection
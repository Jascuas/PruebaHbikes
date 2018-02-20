@extends('layouts.app')
@section('content')
<section>
        <!--Section heading-->
        <h2 class="text-center h1 py-5">Contact us</h2>
        <!--Section description-->
        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi,
        veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

        <div class="row">

        <!--Grid column-->
        <div class="col-md-8 col-xl-9">
            <form>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                <div class="md-form">
                    <div class="md-form">
                    <input type="text" id="contact-name" class="form-control">
                    <label for="contact-name" class="">Your name</label>
                    </div>
                </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                <div class="md-form">
                    <div class="md-form">
                    <input type="text" id="contact-email" class="form-control">
                    <label for="contact-email" class="">Your email</label>
                    </div>
                </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="contact-Subject" class="form-control">
                    <label for="contact-Subject" class="">Subject</label>
                </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                <div class="md-form">
                    <textarea type="text" id="contact-message" class="md-textarea"></textarea>
                    <label for="contact-message">Your message</label>
                </div>

                </div>
            </div>
            <!--Grid row-->

            </form>

            <div class="center-on-small-only">
            <a class="btn btn-primary btn-md">Send</a>
            </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 col-xl-3 text-center">
            <ul class="list-unstyled">
            <li>
                <i class="fa fa-map-marker fa-2x blue-text"></i>
                <p>Alcobendas, Madrid, Spain</p>
            </li>

            <li>
                <i class="fa fa-phone fa-2x mt-4 blue-text"></i>
                <p>63 74 61 186</p>
            </li>

            <li>
                <i class="fa fa-envelope fa-2x mt-4 blue-text"></i>
                <p>gpriego@outlook.com</p>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        </div>

    </section>
@endsection
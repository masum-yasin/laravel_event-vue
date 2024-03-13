<script setup>
        import { Link } from '@inertiajs/vue3';
    </script>

<template>
    <nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
    <!-- logo -->
    <a class="navbar-brand" href="index.html">
      <img src="/frontend/images/logo.png" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item  active">
          <Link class="nav-link" :href="route('home')" data-toggle="dropdown">Home
            <span>/</span>
          </Link>
        </li>

        <li class="nav-item">
            <Link class="nav-link" :href="route('about')">About <span>/</span>
            </Link>
            <!-- Dropdown list -->
           
          </li>
        <li class="nav-item">
          <Link class="nav-link" :href="route('speaker')">Speakers
            <span>/</span>
          </Link>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" :href="route('eventschedule')">Schedule<span>/</span></a>
        </li>
     
       
       
        <li class="nav-item">
          <a class="nav-link" :href="route('contact.create')">Contact</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#!" data-toggle="dropdown">Pages<i class="fa fa-angle-down"></i><span>/</span></a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" :href="route('sponsor.create')">Sponsor</a></li>
            <li><a class="dropdown-item" :href="route('blog')">Gallary</a></li>
            <li><a class="dropdown-item" :href="route('customer.mybooking')">My Booking</a></li>
         </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#!" data-toggle="dropdown">Dashboard<i class="fa fa-angle-down"></i><span>/</span></a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" :href="route('dashboard')">Super Admin</a></li>
            <li><a class="dropdown-item" :href="route('editor_login_form')">Editor</a></li>
            <li><a class="dropdown-item" :href="route('admin_login_form')">Admin</a></li>
            <li><a class="dropdown-item" :href="route('volunteer_login_form')">Volunteer</a></li>
            <li><a class="dropdown-item" :href="route('customer_login_form')">Customer</a></li>
            <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
           </ul>
        </li>
      </ul>
      <a href="contact.html" class="ticket">
        <img src="/frontend/images/icon/ticket.png" alt="ticket">
        <span>Buy Ticket</span>
      </a>
    </div>
  </div>
</nav>
</template>



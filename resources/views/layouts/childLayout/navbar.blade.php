
<style>
  .navbar .nav .primary > a,
.navbar .nav .primary > a:hover,
.navbar .nav .primary > a:focus {
	background-color: #64edbc;
	color:#fff;
}

.navbar .nav .warning > a,
.navbar .nav .warning > a:hover,
.navbar .nav .warning > a:focus {
	background-color: #ed7864;
	color:#fff;
}

.navbar .nav .danger > a,
.navbar .nav .danger > a:hover,
.navbar .nav .danger > a:focus {
	background-color: #6495ed;
	color:#fff;
}
.navbar .nav .logout > a,
.navbar .nav .logout > a:hover,
.navbar .nav .logout > a:focus {
	background-color: #ab95f9;
	color:#fff;
}
.navbar .nav .info > a,
.navbar .nav .info > a:hover,
.navbar .nav .info > a:focus {
	background-color: #95e3f9;
	color:#fff;
}

.navbar .nav .success > a,
.navbar .nav .success > a:hover,
.navbar .nav .success > a:focus {
	background-color: #ed6495;
	color:#fff;
}
</style>

<header>
<div class="navbar">
     <div class="navbar-inner">
       <div class="container">
         <!-- logo -->

         <a class="brand logo" href="./">
     <img width="230" src="assets/img/piggy.jpeg" alt="" />
     </a>
         <!-- end logo -->
         <!-- top menu -->
         <div>
           <nav>
             <ul class="nav topnav">

               <li class="dropdown success">
                 <a href="./homeChild"><i class="icon-home icon-white"></i>Home</a>
               </li>
               <li class="dropdown primary">
                 <a href="./transactionChild"><i class="icon-star icon-white"></i>Transaction Details</a>
               </li>
               <li class="dropdown danger">
                 <a href="./failedTransactionsChild"><i class="icon-minus-sign icon-white"></i>Failed Transactions</a>
               </li>
              </li>
              <li class="dropdown info">
                <a href="./makeTransactionChild"><i class="icon-plus-sign icon-white"></i>New Transaction</a>
              </li>
               <li class="warning">
                 <a href="./profileChild"><i class="icon-user icon-white"></i>Profile</a>
               </li>
               <li class="dropdown logout">
                <a href="{{ url('/logout') }}"><i class="icon-home icon-white"></i>Logout</a>
              </li>
             </ul>
           </nav>
         </div>
         <!-- end menu -->
       </div>
     </div>
   </div>

</header>

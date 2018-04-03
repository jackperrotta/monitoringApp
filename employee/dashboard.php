<?php include '../view/employeeHeader.php' ?>

<div class="container-fluid">
   <div class="row">
     <nav class="col-md-2 d-none d-md-block bg-light sidebar">
       <div class="sidebar-sticky">
         <ul class="nav flex-column">
           <li class="nav-item">
             <a class="nav-link active" href="#">
               <span data-feather="home"></span>
               Dashboard <span class="sr-only">(current)</span>
             </a>
           </li>
           <!-- <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file"></span>
               Orders
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="shopping-cart"></span>
               Products
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="users"></span>
               Customers
             </a>
           </li> -->
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $base_path ?>/employee/index.php?reports">
               <span data-feather="bar-chart-2"></span>
               Reports
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php echo $base_path ?>/employee/index.php?downloads">
               <span data-feather="layers"></span>
               Integrations
             </a>
           </li>
         </ul>

         <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
           <span>Saved reports</span>
           <a class="d-flex align-items-center text-muted" href="#">
             <span data-feather="plus-circle"></span>
           </a>
         </h6>
         <ul class="nav flex-column mb-2">
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Current month
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Last quarter
             </a>
           </li>
           <!-- <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Social engagement
             </a>
           </li> -->
           <li class="nav-item">
             <a class="nav-link" href="#">
               <span data-feather="file-text"></span>
               Year-end sale
             </a>
           </li>
         </ul>
       </div>
     </nav>

     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
         <h1 class="h2">Dashboard</h1>
         <div class="btn-toolbar mb-2 mb-md-0">
           <div class="btn-group mr-2">
             <button class="btn btn-sm btn-outline-secondary">Share</button>
             <button class="btn btn-sm btn-outline-secondary">Export</button>
           </div>
           <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
             <span data-feather="calendar"></span>
             This week
           </button>
         </div>
       </div>

       <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

       <h2>Utilization Metrics</h2>
       <div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>Application Name</th>
               <th>Total Cost</th>
               <th>License Number</th>
               <th>Daily Active Users</th>
               <th>Monthly Utilization</th>
               <th>Monthly Waste</th>
               <!-- <th>Projected Yearly Waste</th> -->
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>Tableau</td>
               <td>$3,000.00</td>
               <td>3</td>
               <td>100.00%</td>
               <td>$0.00</td>
               <td>$0.00</td>
             </tr>
             <tr>
             <td>Salesforce</td>
               <td>$2,000.00</td>
               <td>3</td>
               <td>66.66%</td>
               <td>$111.11</td>
               <td>$1333.33</td>
             </tr>
             <tr>
               <td>Box - Cloud Storage</td>
               <td>$200.00</td>
               <td>2</td>
               <td>100.00%</td>
               <td>$0.00</td>
               <td>$0.00</td>
             </tr>
             <tr>
               <td>IBM Lotus Notes</td>
               <td>$3,000.00</td>
               <td>4</td>
               <td>25.00%</td>
               <td>$187.50</td>
               <td>$2,250.00</td>
             </tr>
             <tr>
               <td>Slack</td>
               <td>$100.00</td>
               <td>3</td>
               <td>66.66%</td>
               <td>$2.77</td>
               <td>$33.33</td>
             </tr>
           </tbody>
         </table>
       </div>
     </main>
   </div>
 </div>
 <?php include '../view/charts.php' ?>
 <?php include '../view/employeeFooter.php' ?>

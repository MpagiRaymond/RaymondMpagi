        <?php
        
            require_once("connection.php");
            $query = "select * from users";
            $result = mysqli_query($con,$query);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="bank.jpg">
    <!-- <link rel="stylesheet" href="bootstrap/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> -->
    <script src="worker.js" defer></script>
    <title>Admin panel</title>
</head>
<body>
    <section class="navbar">
        <div class="logo">
            <img src="bank.jpg" alt="unsupported format">
            <div>Bank Amin Panel</div>
        </div>
        <div class="minor">
            <div class="header">  
                <div class="dropdown" data-dropdown>
                    <button class="link" data-dropdown-button>Information</button>
                    <div class="dropdown_menu information-grid">
                        <div>
                        <div class="dropdown-heading">Free tutorials</div>
                        <div class="dropdown-links">
                            <a href="#" class="link">All</a>
                            <a href="#" class="link">Latest</a>
                            <a href="#" class="link">Popular</a>
                        </div>
                    </div>
                    <div>
                        <div class="dropdown-heading">courses</div>
                        <div class="dropdown-links">
                            <a href="#" class="link">Javascript</a>
                            <a href="#" class="link">CSS</a>
                            <a href="#" class="link">React</a>
                        </div>
                    </div>
                    <div>
                        <div class="dropdown-heading">BLOG</div>
                        <div class="dropdown-links">
                            <a href="#" class="link">All</a>
                            <a href="#" class="link">Latest</a>
                            <a href="#" class="link">Popular</a>
                        </div>
                    </div>
                    <div>
                        <div class="dropdown-heading">OTHER</div>
                        <div class="dropdown-links">
                            <a href="#" class="link">Twitter</a>
                            <a href="#" class="link">Newsletter</a>
                            <a href="#" class="link">Discord</a>
                        </div>
                    </div>
                </div>
            </div>   
            <a href="#" class="link">Princing</a>
            <div class="dropdown" data-dropdown>
                <button class="link" data-dropdown-button>Add user</button>
                <div class="dropdown_menu">
                    <form class="login">
                        <label for="email">Email</label>
                        <input type="text" placeholder="enter your email">
                        <label for="password">Password</label>
                        <input type="password">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <button onClick="darkmode();">Mode</button>
        </div>
        <div class="humberg">
            <span></span>
            <span></span>
            <!-- <span></span> -->
        </div>
        <!-- </div> -->
    </section>
<main>
    <side class="major-side">
        <div class="branch">
                <h5>Accounts</h5>
                <div class="drops">
                    <ul>
                        <li>Insurance</li>
                        <li>Investments</li>
                        <li>Savings</li>
                    </ul>
                </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Collabolative banks</h5>
                <div class="drops">
                    <ul>
                        <li>Standbic bank</li>
                        <li>DFCU bank</li>
                        <li>Cente mobile</li>
                    </ul>
                </div>
            </div>
            <div class="branch">
                <h5>Transations made</h5>
                    <div class="drops">
                        <ul>
                            <li>Standbic bank</li>
                            <li>DFCU bank</li>
                            <li>Cente mobile</li>
                        </ul>
                    </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                <div class="drops">
                    <ul>
                        <li>Standbic bank</li>
                        <li>DFCU bank</li>
                        <li>Cente mobile</li>
                    </ul>
                </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                <div class="drops">
                        <ul>
                            <li>Standbic bank</li>
                            <li>DFCU bank</li>
                            <li>Cente mobile</li>
                        </ul>
                </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                <div class="drops">
                    <ul>
                        <li>Standbic bank</li>
                        <li>DFCU bank</li>
                        <li>Cente mobile</li>
                    </ul>
                </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                    <div class="drops">
                        <ul>
                            <li>Standbic bank</li>
                            <li>DFCU bank</li>
                            <li>Cente mobile</li>
                        </ul>
                    </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                <div class="drops">
                    <ul>
                        <li>Standbic bank</li>
                        <li>DFCU bank</li>
                        <li>Cente mobile</li>
                    </ul>
                </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                    <div class="drops">
                        <ul>
                            <li>Standbic bank</li>
                            <li>DFCU bank</li>
                            <li>Cente mobile</li>
                        </ul>
                    </div>
            </div>
            <!-- </div> -->
            <div class="branch">
                <h5>Transations made</h5>
                <div class="drops">
                    <ul>
                        <li>Standbic bank</li>
                        <li>DFCU bank</li>
                        <li>Cente mobile</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <a href="#">Logout</a>
    </side>
    <section class="main-content">
    <br>
    <div class="content-labels">
        <label>Lending Activities</label>
        <span id="year"></span>
    </div>
    <div class="activities">
        <div class="cards">
                <h1>Enterprise content</h1>
                <img src="uu.jpeg" alt="unsupported file format">
                <p>Enterprise Content management(ECM) sercive...</p>
        </div>
        <div class="cards">
            <h1>Banking as a service</h1>
            <img src="u.png" alt="unsupported file format">
            <p>Customers are able to deposit, withdraw cash at any time from any place.</p>
        </div>
        <div class="cards">
            <h1>vector Stock</h1>
            <img src="uuu.png" alt="unsupported file format">
            <p>All banking services cash operations vector image</p>
        </div>
    </div>
    <br>
    <div class="table-data">
            <table>
                <thead style="background-color:rgba(0,0,0,.5)"><th colspan="4">Bank statistical data represented in tabular form</th></thead>
                <tr>
                    <td>NAME</td>
                    <td>DATE OF BIRTH</td>
                    <td>ADDRESS</td>
                    <td>ID NUMBER</td>
                </tr>
                <tr>
                <?php
                    while($rows = mysqli_fetch_assoc($result))
                    {
                ?>
                        <td>
                            <?php echo $rows['NAME']; ?>
                        </td>
                        <td>
                            <?php echo $rows['DOB']; ?>
                        </td>
                        <td>
                            <?php echo $rows['ADDRESS']; ?>
                        </td>
                        <td>
                            <?php echo $rows['ID']; ?>
                        </td>
                </tr>
                <?php
                }
                ?>
            </table> 
    </div>
    </section>
    <side class="minor-side">
        <p>User profile</p>
        <div class="profiles">
            <div class="account-holder">
                <img src="mmmm.jpeg" alt="unsupported file format">
                <div>
                    <h1>Name: JOHN REGAN</h1>
                    <p>Forex accountant for 4 yrs period</p>
                </div>
            </div>
            <div class="account-holder">
                <img src="mmm.jpeg" alt="unsupported file format">
                <div>
                    <h1>Name: MAGEZI ACRAM</h1>
                    <p>Managing director for the southern Uganda bank</p>
                </div>
            </div>
            <div class="account-holder">
                <img src="mm.jpeg" alt="unsupported file format">
                <div>
                    <h1>Name: KIJJAMBU PATRIC </h1>
                    <p>cashier in central kampala bank</p>
                </div>
            </div>
            <div class="account-holder">
                <img src="m.jpeg" alt="unsupported file format">
                <div>
                    <h1>Name: NAZZIWA JOAN</h1>
                    <p>Bank asistant in the federal bank</p>
                </div>
            </div>
        </div>
        <br>    
        <p>statistics</p>
        <div class="statistics">
            <div class="groups">
                Number of profiles: <span>4</span>
                <div>
                    <b>Names:</b><br>
                    JOHN REGAN
                    MAGEZI ACRAM
                    KIJJAMBU PATRIC
                    NAZZIWA JOAN
                </div>
            </div>
            <div class="groups">
                Numberof branches: <span>3</span>
                <div>
                    <b>Include</b><br>
                    :DFCU Bank
                    Cente mobile
                    Standbic bank
                </div>
            </div>

        </div>
    </side>
</main>
</body>
</html>
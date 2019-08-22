<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6dc3f87d55.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- login -->
    <div class="login-container">
        <div class="login-bg flex-center">
            <img src="images/login-art-01.png" alt="">
        </div>
        <div class="login flex-center">
            <div class="login-form-container flex-center">
                <div class="login-form">
                   <div class="flex-center">
                        <form action="">
                            <div class="login-form-grid">
                                <div>
                                    <i class="fas fa-user-astronaut login-form-icon"></i>
                                    <input class="form-start" name="login-username" type="text" placeholder="Username">
                                </div>
                                <div>
                                    <i class="fas fa-unlock-alt login-form-icon"></i>
                                    <input type="password" name="login-password" placeholder="Password">
                                    <i class="fas fa-eye login-show-password"></i>
                                </div>
                                <div>
                                    <input type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                   </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- login end -->

    <!-- dev-tool -->
    <div class="dev-tool-container">
        <div class="tables-container">
            <div class="tables-search-options">
                <input type="text" class="tables-search" placeholder="Search...">
            </div>
            <div class="tables">
                <div class="spacer-p30"></div>
                <div class="table-card" data-name="Posts">
                    <h3 class="span2 text-center"><a href="">&#91;Posts&#93;</a></h3>
                    <a href="" class="btn">Create</a>
                    <a href="" class="btn">View Data</a>
                    <a href="" class="btn">Drop</a>
                    <a href="" class="btn span2-row flex-center">Add/Edit Records</a>
                    <a href="" class="btn">Insert</a>
                    <input type="text" class="span2" placeholder="# of records">
                    <a href="" class="btn span2">Drop/Create/Insert</a>
                </div>
                <div class="table-card" data-name="Users">
                    <h3 class="span2 text-center"><a href="">&#91;Users&#93;</a></h3>
                    <a href="" class="btn">Create</a>
                    <a href="" class="btn">View Data</a>
                    <a href="" class="btn">Drop</a>
                    <a href="" class="btn span2-row flex-center">Add/Edit Records</a>
                    <a href="" class="btn">Insert</a>
                    <input type="text" class="span2" placeholder="# of records">
                    <a href="" class="btn span2">Drop/Create/Insert</a>
                </div>
                <div class="table-card" data-name="tags">
                    <h3 class="span2 text-center"><a href="">&#91;Tags&#93;</a></h3>
                    <a href="" class="btn">Create</a>
                    <a href="" class="btn">View Data</a>
                    <a href="" class="btn">Drop</a>
                    <a href="" class="btn span2-row flex-center">Add/Edit Records</a>
                    <a href="" class="btn">Insert</a>
                    <input type="text" class="span2" placeholder="# of records">
                    <a href="" class="btn span2">Drop/Create/Insert</a>
                </div>
                <div class="table-card" data-name="Label">
                    <h3 class="span2 text-center"><a href="">&#91;Label&#93;</a></h3>
                    <a href="" class="btn">Create</a>
                    <a href="" class="btn">View Data</a>
                    <a href="" class="btn">Drop</a>
                    <a href="" class="btn span2-row flex-center">Add/Edit Records</a>
                    <a href="" class="btn">Insert</a>
                    <input type="text" class="span2" placeholder="# of records">
                    <a href="" class="btn span2">Drop/Create/Insert</a>
                </div>
                <div class="table-card" data-name="Projects">
                    <h3 class="span2 text-center"><a href="">&#91;Projects&#93;</a></h3>
                    <a href="" class="btn">Create</a>
                    <a href="" class="btn">View Data</a>
                    <a href="" class="btn">Drop</a>
                    <a href="" class="btn span2-row flex-center">Add/Edit Records</a>
                    <a href="" class="btn">Insert</a>
                    <input type="text" class="span2" placeholder="# of records">
                    <a href="" class="btn span2">Drop/Create/Insert</a>
                </div>
                <div class="table-card" data-name="Products">
                    <h3 class="span2 text-center"><a href="">&#91;Products&#93;</a></h3>
                    <a href="" class="btn">Create</a>
                    <a href="" class="btn">View Data</a>
                    <a href="" class="btn">Drop</a>
                    <a href="" class="btn span2-row flex-center">Add/Edit Records</a>
                    <a href="" class="btn">Insert</a>
                    <input type="text" class="span2" placeholder="# of records">
                    <a href="" class="btn span2">Drop/Create/Insert</a>
                </div>
            </div>
            <div class="tables-footer-options">
                <div>
                    <div class="all-tables-card">
                    <h2 class="span2 text-center">All Tables Actions</h2>
                        <a href="" class="btn">Drop All</a>
                        <a href="" class="btn">Create All</a>
                        <div class="span2">
                            <input type="text" class="span2" placeholder="# of records">
                            <a href="" class="btn span2">Insert All</a>
                            <a href="" class="btn span2">Drop/Create/Insert All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-view-main-container">
            <!-- table view container start -->
            <div class="table-view-container">
                <h1 class="text-center"><a href="">&#91;Table Name&#93;</a></h1>
                <div class="button-options">
                    <div class="btn flex-center edit-table-btn" data-toolTip="Edit Table Info"><i class="fas fa-pencil-alt"></i></div>
                    <div class="btn flex-center" data-toolTip="View Errors"><i class="far fa-comment"></i></div>
                    <div class="btn delete flex-center" data-toolTip="Delete All Records"><i class="fas fa-trash-alt"></i></div>
                    <div class="btn flex-center logout-btn" data-toolTip="log Out"><i class="fas fa-power-off"></i></div>
                </div>
                <!-- style bars -->
                <div class="side-border-bar"></div>
                <div class="bottom-border-bar"></div>
                <!-- table view code start-->
                <!-- Floating-header start -->
                <div class="table-view">
                    <div class="floating-header">
                        <table>
                            <thead>
                                <tr>
                                    <th class="view-sm">column 1</th>
                                    <th class="view-sm">column 2</th>
                                    <th class="view-lg">column 3</th>
                                    <th class="view-sm">column 4</th>
                                    <th class="view-sm">column 5</th>
                                    <th class="view-sm">column 6</th>
                                    <th class="view-md">column 7</th>
                                    <th class="view-sm">column 8</th>
                                    <th class="view-sm">column 9</th>
                                    <th class="view-sm">column 10</th>
                                    <th class="view-end"></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- Floating-header end -->
                    <!-- Floating options start -->
                    <div class="floating-options moveable">
                        <table>
                            <thead>
                                <tr>
                                    <th class="view-lg-right">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. Sed ut quos possimus, unde maiores odio animi modi non temporibus libero. Atque eveniet veniam nemo quia sint. Enim recusandae est, iusto atque quo deleniti eum delectus obcaecati nesciunt ipsa adipisci rem dolorem reiciendis nemo perferendis facere. Earum, suscipit? Iure quidem, officiis molestias provident adipisci est vel numquam neque voluptate quibusdam voluptatum placeat excepturi ducimus repudiandae ipsa odit dicta optio unde! Ea perferendis consequuntur dicta eius vitae quia error consectetur nemo dolorum veritatis nostrum, aut hic. Quibusdam incidunt in qui unde dignissimos quaerat consequatur magnam error enim odit fuga natus nihil, placeat necessitatibus quos nulla. Omnis provident ipsam dolorum aliquid porro quibusdam nobis tempora perspiciatis, natus rerum enim eligendi necessitatibus voluptatem dicta facere. Inventore vitae nostrum cupiditate vel corrupti dolorum recusandae amet ullam. Officia ipsam nihil maxime quibusdam exercitationem! Repudiandae cum excepturi recusandae. Iste quaerat vitae velit laborum maxime debitis voluptates dolore, architecto nemo et alias est delectus optio fuga cumque illum facere nesciunt nihil at quibusdam necessitatibus sed recusandae qui incidunt? Nam dolore voluptatibus rem ullam consectetur nihil sunt, repellat quae, voluptatum, culpa sed magni iure quis! Quos voluptatibus architecto mollitia minima a aspernatur iure voluptates, facere quisquam exercitationem nesciunt dolores eius repudiandae ducimus provident molestias aperiam aliquid, debitis quo quam autem! Accusantium molestias aspernatur, voluptates consequatur delectus est obcaecati repudiandae quod perspiciatis impedit aut reiciendis laboriosam, quia fugit maiores ipsa ipsum similique numquam a ab adipisci.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. Sed ut quos possimus, unde maiores odio animi modi non temporibus libero. Atque eveniet veniam nemo quia sint. Enim recusandae est, iusto atque quo deleniti eum delectus obcaecati nesciunt ipsa adipisci rem dolorem reiciendis nemo perferendis facere. Earum, suscipit? Iure quidem, officiis molestias provident adipisci est vel numquam neque voluptate quibusdam voluptatum placeat excepturi ducimus repudiandae ipsa odit dicta optio unde! Ea perferendis consequuntur dicta eius vitae quia error consectetur nemo dolorum veritatis nostrum, aut hic. Quibusdam incidunt in qui unde dignissimos quaerat consequatur magnam error enim odit fuga natus nihil, placeat necessitatibus quos nulla. Omnis provident ipsam dolorum aliquid porro quibusdam nobis tempora perspiciatis, natus rerum enim eligendi necessitatibus voluptatem dicta facere. Inventore vitae nostrum cupiditate vel corrupti dolorum recusandae amet ullam. Officia ipsam nihil maxime quibusdam exercitationem! Repudiandae cum excepturi recusandae. Iste quaerat vitae velit laborum maxime debitis voluptates dolore, architecto nemo et alias est delectus optio fuga cumque illum facere nesciunt nihil at quibusdam necessitatibus sed recusandae qui incidunt? Nam dolore voluptatibus rem ullam consectetur nihil sunt, repellat quae, voluptatum, culpa sed magni iure quis! Quos voluptatibus architecto mollitia minima a aspernatur iure voluptates, facere quisquam exercitationem nesciunt dolores eius repudiandae ducimus provident molestias aperiam aliquid, debitis quo quam autem! Accusantium molestias aspernatur, voluptates consequatur delectus est obcaecati repudiandae quod perspiciatis impedit aut reiciendis laboriosam, quia fugit maiores ipsa ipsum similique numquam a ab adipisci.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="btn-container">
                                            <div class="btn flex-center"><i class="fas fa-pencil-alt"></i></div>
                                            <div class="btn delete flex-center"><i class="fas fa-trash-alt"></i></div>
                                        </div>
                                        <span class="place-holder-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. Sed ut quos possimus, unde maiores odio animi modi non temporibus libero. Atque eveniet veniam nemo quia sint. Enim recusandae est, iusto atque quo deleniti eum delectus obcaecati nesciunt ipsa adipisci rem dolorem reiciendis nemo perferendis facere. Earum, suscipit? Iure quidem, officiis molestias provident adipisci est vel numquam neque voluptate quibusdam voluptatum placeat excepturi ducimus repudiandae ipsa odit dicta optio unde! Ea perferendis consequuntur dicta eius vitae quia error consectetur nemo dolorum veritatis nostrum, aut hic. Quibusdam incidunt in qui unde dignissimos quaerat consequatur magnam error enim odit fuga natus nihil, placeat necessitatibus quos nulla. Omnis provident ipsam dolorum aliquid porro quibusdam nobis tempora perspiciatis, natus rerum enim eligendi necessitatibus voluptatem dicta facere. Inventore vitae nostrum cupiditate vel corrupti dolorum recusandae amet ullam. Officia ipsam nihil maxime quibusdam exercitationem! Repudiandae cum excepturi recusandae. Iste quaerat vitae velit laborum maxime debitis voluptates dolore, architecto nemo et alias est delectus optio fuga cumque illum facere nesciunt nihil at quibusdam necessitatibus sed recusandae qui incidunt? Nam dolore voluptatibus rem ullam consectetur nihil sunt, repellat quae, voluptatum, culpa sed magni iure quis! Quos voluptatibus architecto mollitia minima a aspernatur iure voluptates, facere quisquam exercitationem nesciunt dolores eius repudiandae ducimus provident molestias aperiam aliquid, debitis quo quam autem! Accusantium molestias aspernatur, voluptates consequatur delectus est obcaecati repudiandae quod perspiciatis impedit aut reiciendis laboriosam, quia fugit maiores ipsa ipsum similique numquam a ab adipisci.</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="floating-options">
                        <table>
                            <thead>
                                <tr>
                                    <th class="view-lg-right">Options</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <!-- Floating options end -->
                    <!-- table start -->
                    <table>
                        <thead>
                            <tr>
                                <th class="view-sm">column 1</th>
                                <th class="view-sm">column 2</th>
                                <th class="view-lg">column 3</th>
                                <th class="view-sm">column 4</th>
                                <th class="view-sm">column 5</th>
                                <th class="view-sm">column 6</th>
                                <th class="view-md">column 7</th>
                                <th class="view-sm">column 8</th>
                                <th class="view-sm">column 9</th>
                                <th class="view-sm">column 10</th>
                                <th class="view-end"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem, ipsum dolor. ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. Sed ut quos possimus, unde maiores odio animi modi non temporibus libero. Atque eveniet veniam nemo quia sint. Enim recusandae est, iusto atque quo deleniti eum delectus obcaecati nesciunt ipsa adipisci rem dolorem reiciendis nemo perferendis facere. Earum, suscipit? Iure quidem, officiis molestias provident adipisci est vel numquam neque voluptate quibusdam voluptatum placeat excepturi ducimus repudiandae ipsa odit dicta optio unde! Ea perferendis consequuntur dicta eius vitae quia error consectetur nemo dolorum veritatis nostrum, aut hic. Quibusdam incidunt in qui unde dignissimos quaerat consequatur magnam error enim odit fuga natus nihil, placeat necessitatibus quos nulla. Omnis provident ipsam dolorum aliquid porro quibusdam nobis tempora perspiciatis, natus rerum enim eligendi necessitatibus voluptatem dicta facere. Inventore vitae nostrum cupiditate vel corrupti dolorum recusandae amet ullam. Officia ipsam nihil maxime quibusdam exercitationem! Repudiandae cum excepturi recusandae. Iste quaerat vitae velit laborum maxime debitis voluptates dolore, architecto nemo et alias est delectus optio fuga cumque illum facere nesciunt nihil at quibusdam necessitatibus sed recusandae qui incidunt? Nam dolore voluptatibus rem ullam consectetur nihil sunt, repellat quae, voluptatum, culpa sed magni iure quis! Quos voluptatibus architecto mollitia minima a aspernatur iure voluptates, facere quisquam exercitationem nesciunt dolores eius repudiandae ducimus provident molestias aperiam aliquid, debitis quo quam autem! Accusantium molestias aspernatur, voluptates consequatur delectus est obcaecati repudiandae quod perspiciatis impedit aut reiciendis laboriosam, quia fugit maiores ipsa ipsum similique numquam a ab adipisci.</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. Sed ut quos possimus, unde maiores odio animi modi non temporibus libero. Atque eveniet veniam nemo quia sint. Enim recusandae est, iusto atque quo deleniti eum delectus obcaecati nesciunt ipsa adipisci rem dolorem reiciendis nemo perferendis facere. Earum, suscipit? Iure quidem, officiis molestias provident adipisci est vel numquam neque voluptate quibusdam voluptatum placeat excepturi ducimus repudiandae ipsa odit dicta optio unde! Ea perferendis consequuntur dicta eius vitae quia error consectetur nemo dolorum veritatis nostrum, aut hic. Quibusdam incidunt in qui unde dignissimos quaerat consequatur magnam error enim odit fuga natus nihil, placeat necessitatibus quos nulla. Omnis provident ipsam dolorum aliquid porro quibusdam nobis tempora perspiciatis, natus rerum enim eligendi necessitatibus voluptatem dicta facere. Inventore vitae nostrum cupiditate vel corrupti dolorum recusandae amet ullam. Officia ipsam nihil maxime quibusdam exercitationem! Repudiandae cum excepturi recusandae. Iste quaerat vitae velit laborum maxime debitis voluptates dolore, architecto nemo et alias est delectus optio fuga cumque illum facere nesciunt nihil at quibusdam necessitatibus sed recusandae qui incidunt? Nam dolore voluptatibus rem ullam consectetur nihil sunt, repellat quae, voluptatum, culpa sed magni iure quis! Quos voluptatibus architecto mollitia minima a aspernatur iure voluptates, facere quisquam exercitationem nesciunt dolores eius repudiandae ducimus provident molestias aperiam aliquid, debitis quo quam autem! Accusantium molestias aspernatur, voluptates consequatur delectus est obcaecati repudiandae quod perspiciatis impedit aut reiciendis laboriosam, quia fugit maiores ipsa ipsum similique numquam a ab adipisci.</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lorem, ipsum dolor.</td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum eaque facere minus voluptas est voluptatem rerum blanditiis quod, consequatur suscipit dolores harum. Sed ut quos possimus, unde maiores odio animi modi non temporibus libero. Atque eveniet veniam nemo quia sint. Enim recusandae est, iusto atque quo deleniti eum delectus obcaecati nesciunt ipsa adipisci rem dolorem reiciendis nemo perferendis facere. Earum, suscipit? Iure quidem, officiis molestias provident adipisci est vel numquam neque voluptate quibusdam voluptatum placeat excepturi ducimus repudiandae ipsa odit dicta optio unde! Ea perferendis consequuntur dicta eius vitae quia error consectetur nemo dolorum veritatis nostrum, aut hic. Quibusdam incidunt in qui unde dignissimos quaerat consequatur magnam error enim odit fuga natus nihil, placeat necessitatibus quos nulla. Omnis provident ipsam dolorum aliquid porro quibusdam nobis tempora perspiciatis, natus rerum enim eligendi necessitatibus voluptatem dicta facere. Inventore vitae nostrum cupiditate vel corrupti dolorum recusandae amet ullam. Officia ipsam nihil maxime quibusdam exercitationem! Repudiandae cum excepturi recusandae. Iste quaerat vitae velit laborum maxime debitis voluptates dolore, architecto nemo et alias est delectus optio fuga cumque illum facere nesciunt nihil at quibusdam necessitatibus sed recusandae qui incidunt? Nam dolore voluptatibus rem ullam consectetur nihil sunt, repellat quae, voluptatum, culpa sed magni iure quis! Quos voluptatibus architecto mollitia minima a aspernatur iure voluptates, facere quisquam exercitationem nesciunt dolores eius repudiandae ducimus provident molestias aperiam aliquid, debitis quo quam autem! Accusantium molestias aspernatur, voluptates consequatur delectus est obcaecati repudiandae quod perspiciatis impedit aut reiciendis laboriosam, quia fugit maiores ipsa ipsum similique numquam a ab adipisci.</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td>Lorem, ipsum  ipsum dolor ipsum dolor ipsum dolor</td>
                                <td>Lorem, ipsum </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- table end -->
                </div>
                <!-- table view code end-->
            </div>
            <!-- table view container start -->
            <div class="pagination flex-center">
                <a class="btn" href="" data-toolTip="Skip to Start"><i class="fas fa-angle-double-left"></i></a>
                <a class="btn" href="" data-toolTip="Previous"><i class="fas fa-angle-left"></i></a>
                <a class="btn" href=""><span>1</span></a>
                <a class="btn" href=""><span>2</span></a>
                <a class="btn active" href=""><span>3</span></a>
                <a class="btn" href=""><span>4</span></a>
                <a class="btn" href=""><span>5</span></a>
                <a class="btn" href="" data-toolTip="Next"><i class="fas fa-angle-right"></i></a>
                <a class="btn" href="" data-toolTip="Skip to End"><i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    <!-- dev-tool end-->

    <!-- js files -->
    <script src="login.js"></script>
</body>
</html>
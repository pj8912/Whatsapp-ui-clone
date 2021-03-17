<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp</title>
    <link rel="stylesheet" href="whatsapp.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <!-- whatsapp -->
    <nav class="navbar navbar-success bg-success">
        <div class="container-fluid m-1">
            <a class=" text-white" href="#" style="font-weight:300;font-size:23px; font-family:Arial; text-decoration:none">
                WhatsApp
            </a>

            <ul style="text-decoration:none;" class=" nav justify-content-end text-white">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <a href="#" style="text-decoration:none; " class="mr-auto p-2 text-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="  bi bi-camera-fill" viewBox="0 0 16 16">
                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
            </svg>
        </a>

        <ul class="nav justify-content-center" style="margin:0 auto;font-size:20px;font-weight:bold" id="list-tab" role="tablist">
            <!-- <li class="nav-item p-3">
                <a class=" nav-link  text-white" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                        <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                    </svg>
                </a>
            </li> -->
            <!-- <div style="border-bottom:solid 1px #000;
  padding-bottom: 2px;justify-content:center">
CHATS
</div> -->
            <li class="nav-item">
                <a class="nav-link m-3  text-white chats" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile">CHATS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link m-3 text-white status" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="messages">STATUS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link m-3 text-white  calls" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="settings">CALLS</a>
            </li>
            </div>
        </ul>


    </nav>
    <div class="container-fluid p-0">

        <div style="margin:0 auto" class="tab-content" id="nav-tabContent">
            <!-- CHATS -->
            <div class="tab-pane fade  " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="" style="width:100%">

                    <a href="#" id="chatee" class="list-group-item list-group-item-action " aria-current="true">

                        <img src="gates.jpg" id="dp">

                        <div class="p-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class=" text-dark mb-1">Bill Gates</h5>
                                <small>3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small>And some small print.</small>
                        </div>
                    </a>

                    <a href="#" id="chatee" class="list-group-item list-group-item-action">
                        <img src="larry.jpg" id="dp">

                        <div class="p-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class=" text-dark mb-1">Larry Ellison</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small class="text-muted">And some muted small print.</small>
                        </div>
                    </a>
                    <a href="#" id="chatee" class="list-group-item list-group-item-action">
                        <img src="jobs.jpg" id="dp">
                        <div class="p-1">

                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="text-dark mb-1">Steve Jobs</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small class="text-muted">And some muted small print.</small>
                        </div>
                    </a>
                    <a href="#" id="chatee" class="list-group-item list-group-item-action " aria-current="true">

                        <img src="gates.jpg" id="dp">

                        <div class="p-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class=" text-dark mb-1">Bill Gates</h5>
                                <small>3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small>And some small print.</small>
                        </div>
                    </a>

                    <a href="#" id="chatee" class="list-group-item list-group-item-action">
                        <img src="larry.jpg" id="dp">

                        <div class="p-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class=" text-dark mb-1">Larry Ellison</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small class="text-muted">And some muted small print.</small>
                        </div>
                    </a>
                    <a href="#" id="chatee" class="list-group-item list-group-item-action">
                        <img src="jobs.jpg" id="dp">
                        <div class="p-1">

                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="text-dark mb-1">Steve Jobs</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small class="text-muted">And some muted small print.</small>
                        </div>
                    </a>
                    <a href="#" id="chatee" class="list-group-item list-group-item-action " aria-current="true">

                        <img src="gates.jpg" id="dp">

                        <div class="p-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class=" text-dark mb-1">Bill Gates</h5>
                                <small>3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small>And some small print.</small>
                        </div>
                    </a>

                    <a href="#" id="chatee" class="list-group-item list-group-item-action">
                        <img src="larry.jpg" id="dp">

                        <div class="p-1">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class=" text-dark mb-1">Larry Ellison</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small class="text-muted">And some muted small print.</small>
                        </div>
                    </a>
                    <a href="#" id="chatee" class="list-group-item list-group-item-action">
                        <img src="jobs.jpg" id="dp">
                        <div class="p-1">

                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="text-dark mb-1">Steve Jobs</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <!-- <p class="mb-1">Some placeholder content in a paragraph.</p> -->
                            <small class="text-muted">And some muted small print.</small>
                        </div>
                    </a>


                </div>

            </div>
            <!-- STATUS -->
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quos. Recusandae laboriosam non fugiat, iure accusamus ullam temporibus totam, odit quibusdam porro sint sapiente ab eius maxime praesentium consectetur necessitatibus? ..</div>
            <!-- CALLS -->
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quos. Recusandae laboriosam non fugiat, iure accusamus ullam temporibus totam, odit quibusdam porro sint sapiente ab eius maxime praesentium consectetur necessitatibus? ..</div>
        </div>
    </div>

    <div class="fixed-bottom p-3">
        <div style=" width:50px;height:50px;color:white; background:limegreen; border-radius:50px;object-fit:cover;margin-left:auto;">
            <svg style="margin-left:9px;margin-top:12px;object-fit:cover;color:white" xmlns="http://www.w3.org/2000/svg" width="30" height="28" fill="currentColor" class=" p-1 bi bi-chat-right-text-fill" viewBox="0 0 16 16">
                <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM3.5 3h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1 0-1zm0 2.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z" />
            </svg>
        </div>
    </div>

</body>

</html>
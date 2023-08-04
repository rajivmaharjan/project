<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/npcpage.css">
    <title>Permissions Page</title>
  </head>

  <body>
    <header>
      <div class="menu">
        <i class="fa-sharp fa-solid fa-bars togg"></i>
        <img src="Img\Logo-white.PNG" alt="Logo of company" id="logoimage" />

        <div class="navbar navbar-list">
          <ul>
            <li>
              <i
                class="fa-solid fa-house fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_dashboard" class="li-pos">Dashboard</a>
            </li>

            <li>
              <i
                class="fa-solid fa-pen-to-square fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_prepration" class="li-pos">Preparation</a>
            </li>
            <li>
              <i
                class="fa-solid fa-van-shuttle fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_distributed" class="li-pos">Distributed</a>
            </li>
            <li>
              <i
                class="fa-solid fa-list-check fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_validate" class="li-pos">Validate</a>
            </li>
            <li>
              <i
                class="fa-solid fa-table-columns fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_permissions" class="li-pos">Permissions</a>
            </li>

            <hr id="hrline" />
            <li>
              <i class="fa-solid fa-user fa-position" style="color: #54545f"></i
              ><a href="npc_profile" class="li-pos">Profile</a>
            </li>
            <li>
              <i
                class="fa-solid fa-envelope fa-position"
                style="color: #54545f"
              ></i
              ><a href="npc_notification" class="li-pos">Notification</a>
            </li>
            <li>
              <i class="fa-solid fa-gear fa-position" style="color: #54545f"></i
              ><a href="npc_setting" class="li-pos">Setting</a>
            </li>
            <li>
              <i
                class="fa-solid fa-arrow-right-from-bracket fa-position"
                style="color: #54545f"
              ></i
              ><a href="logout" class="li-pos">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <script src="js\npc_page.js"></script>
  </body>
</html>

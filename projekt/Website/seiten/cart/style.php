<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website</title>
    <style>
      #im {
        height: auto;
        width: auto;
        max-height: 20vh;
        max-width: 20vw;
      }

      .listitem {
        border-bottom: 0.5px solid #000;
        margin:1%;
        position: relative;
        display: grid;
        grid-template-columns: 25% 50% 25%;
        grid-template-rows: repeat(2, 10vh);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
      }

      .div1 { grid-area: 1 / 1 / 3 / 2; }
      .div2 { grid-area: 1 / 2 / 2 / 3; }
      .div3 { grid-area: 2 / 2 / 3 / 3; }
      .div4 {
         grid-area: 1 / 3 / 3 / 4;
         text-align: right; }
      .div5 { grid-area: 1 / 4 / 3 / 5; }
      .div6 { grid-area: 1 / 5 / 3 / 6; }

      .div1,
      .div2,
      .div3,
      .div4,
      .div5,
      .div6 {
        margin: 1px;
      }
      .itemLöschen{
        positon:relative;
        margin-left:10%;
        text-decoration:none;
        color:black;
      }
      .itemLöschen:hover{
        color:blue;
      }
      .itemPlus, .itemMinus{
        text-decoration:none;
        color:black;
      }



    </style>
  </head>
  <body></body>
</html>

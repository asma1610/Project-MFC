<!DOCTYPE html>
<html>
<head>
    <title> MedFaceCare products Page </title>
    <link rel="icon" href="logo.png"/>
    <link rel="stylesheet" href="styleee.css">

    <style>
        .container{
        display: flex;
        justify-content: space-evenly;
        }
 
        .product{
        background-color: whitesmoke;
        text-align: center;
        border: 1px solid grey;
        border-radius: 30px;
        height: 550px;
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
        width: 410px;
        }

        .product div{
        text-align: left;
        margin-left: 15px;
        width: 90%;
        height: 100px;
        }

        div p{
        margin-left: 15px;
        margin-right: 15px;
        }

        .review{
            overflow: auto;
        }


        #product{
            font-size: medium;
            background-color: whitesmoke;
            width: max-content;
            border:6px solid transparent;
        }

     </style>


</head>
<body>
    <header>
        <table>
            <tr>
                <td text-align="center"><img src="logo.png" width="70px" height="70px"></td>
                <td text-align="center">MedFaceCare</td>
            </tr>
        </table>
        <br>
     <div class="topnav">          
        <a href="productshtml.php">Products</a>
        <a href="loggedhtml.php">Home</a>
     </div>
    </header>
       <br><br>
    

        <div class="container">
            <div class="product">
                <img src="mois.png" alt="skinside moisturizer" height="300px">
                <h2>Skinside Hyaluronic Acid Daily Moisturizer</h2>
                <p>A 24 Hr long lasting moisturizer that allows the skin to replenish its own hyaluronic acid (HA) for overall moisture, hydration, and rejuvenation.</p>
           
            </div>
            <div class="product">
                <img src="niacin.png" alt="vichy niacinamide" height="300px">
                <h2>LIFTACTIV B3 Dark Spots Serum</h2>
                <p>acts at different skin layers, to tackle dark spots formation at the epidermis basal layer while peeling visible dark spots at the skin surface. B3 serum also reduces wrinkles. Complexion looks even and radiant.​</p>
      
            </div>
            <div class="product">
                <img src="Sun-skinside.png" alt="skinside sunscreen" height="300px">
                <h2>Skinside Niacinamide Sun Gel SPF50+</h2>
                <p>A lightweight, oil-free dry touch daily gel cream that guarantees optimum broad-spectrum UVA/UVB protection; with a dynamic blend of UV filters to ensure the best of both worlds; super protection and spreadability.</p>
    
            </div>

        </div>
<br><br>
<div class="container">
    <div class="product">
        <img src="starville.png" alt="Starville Facewash" height="300px">
        <h2>Starville Facial Cleanser</h2>
        <p>Gentle Foaming Gel Tested For Oily And Combined Skin Perfectly Cleanses And Puriﬁes The Skin From Excessive Sebum And Impurities, With Respect Of Normal Skin pH (Soap Free), With Powerful Ingredients To Control Shine And Fights Acne Formation.</p>

    </div>
    <div class="product">
        <img src="white.png" alt="Melatex" height="300px">
        <h2>Melatex Lightening Cream</h2>
        <p>A special formula that contains vitamin PP in addition to arbutin, licorice extract, lactic acid and vitamin C.Triple action as it treats all types of dark spots and lightens and unifies skin tone. Suitable for all skin types.It does not clog pores and does not cause acne.</p>
  
    </div>
    <div class="product">
        <img src="vitc.png" alt="starville vit c" height="300px">
        <h2>Starville Vitamin C Serum</h2>
        <p>This powerful serum is enriched with essential vitamins, anti-oxidants, and Astra Force to help reduce wrinkles and blemishes, increase firmness and hydration, and even out your complexion.</p>
    
    </div>


    
</div>
        <br><br>
        <?php
        include("connect.php");
        $query = "SELECT * FROM reviews";
        $result = mysqli_query($conn, $query);
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>" .$row['product']." : ". $row['review'] . "  ... Review added by " . $row['first_name'] ."<br>"."</p>";
        }
        ?>
    
        <form method="post" action="comments.php">
            <br>
            <div class="custom-select" style="width:200px;">
            <select name="product" id="product">
                <option value="0">Choose the product</option>
                <option value="Skinside Hyaluronic Acid Daily Moisturizer">Skinside Hyaluronic Acid Daily Moisturizer  </option>
                <option value="LIFTACTIV B3 Dark Spots Serum ">LIFTACTIV B3 Dark Spots Serum  </option>
                <option value="Skinside Niacinamide Sun Gel SPF50+">Skinside Niacinamide Sun Gel SPF50+  </option>
                <option value="Starville Facial Cleanser">Starville Facial Cleanser  </option>
                <option value="Melatex Lightening Cream">Melatex Lightening Cream  </option>
                <option value="Starville Vitamin C Serum">Starville Vitamin C Serum  </option>


            </select>
        </div>
        <br>
            <textarea name="comment" placeholder="Share your feedback..."></textarea>
            <br> <br>
            <button type="submit" name="add">Add</button>
        </form>
</body>
</html>
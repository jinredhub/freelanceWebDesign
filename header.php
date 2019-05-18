

<style>

    /* desktop nav=========================================== */
    .desktopNavContainer{
        background-color: #fcfbfa
    }
    .desktopNavContainer .logo{
        padding: 14px 16px;
    }
    .desktopNavContainer a{
        color: #1b1c1d;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* mobile nav============================================ */
    .mobileNavContainer{
        background-color: #fcfbfa;
        position: relative;
        display: none;
    }
    .mobileNavContainer .myLinks{
        display: none;
        position: absolute;
        width: 100%;
        top: 100%;
    }
    .mobileNavContainer a{
        color: #1b1c1d;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        display: block;
        background-color: #fcfbfa;
    }
    .mobileNavContainer .hamburgerIcon{
        background-color: transparent;
        display: block;
    }
    .mobileNavContainer a:hover{
        background-color: #e0e0e0;
    }

    /* both============================================ */
    .langButton{
        border-radius: 0;
        background-color: #98b31a !important;
    }
    nav{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        z-index: 99;
    }
 

</style>

<!-- desktop nav menu -->
<div class='nav desktopNavContainer disp-flex justify-content--space-between align-items--center hide-tablet'>
    <a href="./index.php" class='logo'>JR</a>
    <div class='myDesktopLinks'>
        <a href="./index.php">トップ</a>
        <a href="./price.php">制作費用</a>
        <a href="./contact.php">お問い合わせ・お申込み</a>
        <a href="./index_en.php" class='btn btn-primary langButton'>English</a>
    </div>
</div>

<!-- mobile nav menu -->
<div class='nav mobileNavContainer disp-flex justify-content--space-between align-items--center show-tablet-flex'>
    <a href="./index.php">JR</a>
    <div class="myLinks">
        <a href="./index.php">トップ</a>
        <a href="./price.php">制作費用</a>
        <a href="./contact.php">お問い合わせ・お申込み</a>
        <a href="./index_en.php" class='btn btn-primary langButton'>English</a>
    </div>
    <a href="javascript:void(0);" class='hamburgerIcon' aria-label="click to open mobile navigation menu">
        <i class="fas fa-bars"></i>
    </a>
</div>


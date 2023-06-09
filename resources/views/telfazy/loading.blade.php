<style>

    #preloader {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #020d18;
/* change if the mask should have another color then white */
z-index: 99999;
text-align: center;
/* makes sure it stays on top */
}
#preloader img {
    margin-top: 100px;
}
@media (max-width: 767px) {
#preloader img {
    margin-bottom: -90px;
}
}
#status {
position: relative;
width: 70px;
height: 70px;
top: 10%;
margin: 0 auto;
right: 35px;
}
#status span {
position: absolute;
border-radius: 999px;
}
#status span:nth-child(1) {
border: 5px solid #FEC107;
border-top: 5px solid transparent;
width: 70px;
height: 70px;
animation: spin1 2s infinite linear;
}
#status span:nth-child(2) {
border: 5px solid #ff0000;
border-top: 5px solid transparent;
top: 20px;
left: 20px;
width: 30px;
height: 30px;
animation: spin2 1s infinite linear;
margin-left: 35px;
}
@keyframes spin1 {
0% {
transform: rotate(360deg);
opacity: 1;
}
50% {
transform: rotate(180deg);
opacity: 0.75;
}
100% {
transform: rotate(0deg);
opacity: 1;
}
}
@keyframes spin2 {
0% {
transform: rotate(0deg);
opacity: 0.75;
}
50% {
transform: rotate(180deg);
opacity: 1;
}
100% {
transform: rotate(360deg);
opacity: 0.75;
}
}
/* @media (min-width: 320px) and (max-width: 600px){
    .logo{
        
    }
    #status{

    }
} */
</style>

<div id="preloader">
    <img class="logo" src="/images/logo.png" alt="" width="200px" height="200px">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>


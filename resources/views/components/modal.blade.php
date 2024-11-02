@if (@session()->has('message'))
<div class="modal" id="js--modal" onclick="closeModal()">
    <div class="popup">
        <p>{{session('message')}}</p>
        <button class="button" onclick="closeModal()">Close</button>
    </div>
</div>
@endif
<style>
    .hidden{
        display: none
    }

    .button{
        margin: 0 auto;
        display: block;
        background-color: var(--primary);
        border: none;
        border-radius: 9999px;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }

    .modal{
        position: fixed;
        background: rgba(0, 0, 0, 0.5);
        width: 100vw;
        height: 100vh;
        left: 0px;
        top: 0px;
    }

    .popup{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
        padding: 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6px);
        -webkit-backdrop-filter: blur(6px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .popup *{
        margin: 5px auto;
    }
</style>

<script>
    function closeModal() {
        document.getElementById("js--modal").classList.add('hidden');
    }
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .main-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
    }

    .main-wrapper * {
        font-family: 'Inter', sans-serif;
        color: #363636;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .main-wrapper .inner-wrapper {
        background: #f0f0f1;
        display: flex;
        width: 25%;
        padding: 30px 40px;
        flex-direction: column;
        box-shadow: -9px -9px 16px rgba(255, 255, 255, 0.8), 9px 9px 16px rgba(163, 177, 198, 0.5);
        border-radius: 5px;
    }

    .main-wrapper .inner-wrapper h1 {
        font-weight: 800;
        margin-bottom: 40px;
        text-align: center;
    }

    .main-wrapper .inner-wrapper h3 {
        margin-bottom: 40px;
    }

    .main-wrapper .inner-wrapper h3 span.applied {
        font-size: 12px;
        padding: 3px;
        background: #34a155;
        color: white;
        border-radius: 5px;
    }

    .main-wrapper .inner-wrapper h3 span.not-applied {
        font-size: 12px;
        padding: 3px;
        background: #363636;
        color: white;
        border-radius: 5px;
    }

    .main-wrapper .inner-wrapper .buttons-wrapper {
        display: flex;
        flex-direction: column;
    }

    .main-wrapper .inner-wrapper .buttons-wrapper button {
        margin-bottom: 10px;
        padding: 10px;
        border: none;
        color: white;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: .2s transform ease-in-out;
    }

    .main-wrapper .inner-wrapper .buttons-wrapper button:hover {
        transform: scale(1.05);
    }

    .main-wrapper .inner-wrapper .buttons-wrapper .reapply-markups-btn {
        background: #B50000;
    }

    .main-wrapper .inner-wrapper .buttons-wrapper .remove-markups-btn {
        background: #d7d7d7;
        color: #363636;
    }
</style>

<div class="main-wrapper">
    <div class="inner-wrapper">
        <img src="https://schema-gen-api.herokuapp.com/images/logo.svg">
        <h1>Schema Generator</h1>
        <h3>Status: <?php if ( file_exists( WP_PLUGIN_DIR . "//rank-schema//markup.json" ) ) {
            echo '<span class="applied">Applied</span>';
        } else {
            echo '<span class="not-applied">Not Applied</span>';
        } ?></h3>
        
        <div class="buttons-wrapper">
            <button class="reapply-markups-btn">Re-apply Markups</button>
            <button class="remove-markups-btn">Remove Markups</button>
        </div>
    </div>
</div>
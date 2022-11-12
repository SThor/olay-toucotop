<script type="module">
    import { isLucky } from 'https://cdn.jsdelivr.net/gh/etrusci-org/nifty@main/javascript/isLucky.min.js';

    function update() {
        outputElement.innerHTML = `${(!isLucky(modConf.luckyChance)) ? 'L=0' : 'L=1'}`;
    }

    update();

    setInterval(() => {
        update();
    }, modConf.updateEvery);
</script>

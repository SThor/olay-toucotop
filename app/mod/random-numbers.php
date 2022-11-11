<script type="module">
    import { getRandomInteger } from 'https://cdn.jsdelivr.net/gh/etrusci-org/nifty@main/javascript/getRandomInteger.min.js';
    import { isPrime } from 'https://cdn.jsdelivr.net/gh/etrusci-org/nifty@main/javascript/isPrime.min.js';
    import { padNum } from 'https://cdn.jsdelivr.net/gh/etrusci-org/nifty@main/javascript/padNum.min.js';

    const modConf = <?php print(json_encode($this->modConf)); ?>;
    const outputElement = document.querySelector('.output');

    function update() {
        let n = getRandomInteger(1, 999_999)

        if (modConf.format == 'simple') {
            outputElement.innerHTML = `${n}`;
        }

        if (modConf.format == 'label') {
            let p = isPrime(n)
            let s = padNum(n, 6, '_')
            outputElement.innerHTML = (p) ? `${s}=P` : `${s}=N`;
        }
    }

    update();

    setInterval(() => {
        update();
    }, modConf.updateEvery);
</script>

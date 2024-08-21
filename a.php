<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
        <div style="margin: 20px 0;" class="111">
            <span class="span">1</span>
            <span class="span">2</span>
            <span class="span">3</span>
            <span class="span">4</span>
            <span class="span">5</span>
            <span class="span">6</span>
        </div>

        <form class="222">
            <input class="input" type="text" value="0">
            <input class="input" type="text" value="0">
            <input class="input" type="text" value="0">
            <input class="input" type="text" value="0">
            <input class="input" type="text" value="0">
            <input class="input" type="text" value="0">
        </form>

    <!-- <script>
        const inputC = document.querySelectorAll('.input') 
        inputC.forEach((item) => {
            item.addEventListener("click",(event) => {
                const span = item.querySelector('span');
                const input = item.querySelector('input');
                
                let values = span.textContent;

                
                if (input.value === values) {
                    input.value = 0;
                } else {
                    input.value = values;
                }

            })
        })
    </script> -->
    <script>
        const span = document.querySelectorAll(".span");
        const input = document.querySelectorAll(".input");

        span.forEach((item,index) => {
           let inputItem = input[index];
            console.log(inputItem)
           item.addEventListener("click", () => {
            if (inputItem.value === item.textContent) {
                inputItem.value = 0;
            }else {
                inputItem.value = item.textContent;
            }
           })
        })
    </script>
</body>
</html>
<span id="helloSpan1" onclick="updateInputValue('helloSpan1', 'helloInput1')">hello</span>
<input id="helloInput1" value="">
<span id="helloSpan2" onclick="updateInputValue('helloSpan2', 'helloInput2')">world</span>
<input id="helloInput2" value="">


<script>
function updateInputValue(spanId, inputId) {
  var spanElement = document.getElementById(spanId);
  var inputElement = document.getElementById(inputId);
  var inputValue = inputElement.value;

  if (inputValue === spanElement.innerHTML) {
    inputElement.value = "";
  } else {
    inputElement.value = spanElement.innerHTML;
  }
}
</script>


            <input type='text' id='A2' name='A2' value='' readonly class="hidden-input">
                <input type='text' id='A3' name='A3' value='' readonly class="hidden-input">
                <input type='text' id='A4' name='A4' value='' readonly class="hidden-input">
                <input type='text' id='A5' name='A5' value='' readonly class="hidden-input">
<!-- <input type='text' name='A6' value='0' readonly class="hidden-input">
    <input type='text' name='A7' value='0' readonly class="hidden-input">
    <input type='text' name='A8' value='0' readonly class="hidden-input">
    <input type='text' name='A9' value='0' readonly class="hidden-input">
    <input type='text' name='A10' value='0' readonly class="hidden-input">
    <input type='text' name='A11' value='0' readonly class="hidden-input">
    <input type='text' name='A12' value='0' readonly class="hidden-input">
    <input type='text' name='A13' value='0' readonly class="hidden-input">
    <input type='text' name='A14' value='0' readonly class="hidden-input">
    <input type='text' name='A15' value='0' readonly class="hidden-input">
    <input type='text' name='A16' value='0' readonly class="hidden-input">
    <input type='text' name='A17' value='0' readonly class="hidden-input">

    <input type='text' name='B1' value='0' readonly class="hidden-input">
    <input type='text' name='B2' value='0' readonly class="hidden-input">
    <input type='text' name='B3' value='0' readonly class="hidden-input">
    <input type='text' name='B4' value='0' readonly class="hidden-input">
    <input type='text' name='B5' value='0' readonly class="hidden-input">
    <input type='text' name='B6' value='0' readonly class="hidden-input">
    <input type='text' name='B7' value='0' readonly class="hidden-input">
    <input type='text' name='B8' value='0' readonly class="hidden-input">
    <input type='text' name='B9' value='0' readonly class="hidden-input">
    <input type='text' name='B10' value='0' readonly class="hidden-input">
    <input type='text' name='B11' value='0' readonly class="hidden-input">
    <input type='text' name='B12' value='0' readonly class="hidden-input">
    <input type='text' name='B13' value='0' readonly class="hidden-input">
    <input type='text' name='B14' value='0' readonly class="hidden-input">
    <input type='text' name='B15' value='0' readonly class="hidden-input">
    <input type='text' name='B16' value='0' readonly class="hidden-input">
    <input type='text' name='B17' value='0' readonly class="hidden-input">
    <input type='text' name='B18' value='0' readonly class="hidden-input">

    <input type='text' name='C1' id='C1' value='0' readonly class="hidden-input">
    <input type='text' name='C2' id='C2' value='0' readonly class="hidden-input">
    <input type='text' name='C3' value='0' readonly class="hidden-input">
    <input type='text' name='C4' value='0' readonly class="hidden-input">
    <input type='text' name='C5' value='0' readonly class="hidden-input">
    <input type='text' name='C6' value='0' readonly class="hidden-input">
    <input type='text' name='C7' value='0' readonly class="hidden-input">
    <input type='text' name='C8' value='0' readonly class="hidden-input">
    <input type='text' name='C9' value='0' readonly class="hidden-input">
    <input type='text' name='C10' value='0' readonly class="hidden-input">
    <input type='text' name='C11' value='0' readonly class="hidden-input">
    <input type='text' name='C12' value='0' readonly class="hidden-input">
    <input type='text' name='C13' value='0' readonly class="hidden-input">
    <input type='text' name='C14' value='0' readonly class="hidden-input">
    <input type='text' name='C15' value='0' readonly class="hidden-input">
    <input type='text' name='C16' value='0' readonly class="hidden-input">
    <input type='text' name='C17' value='0' readonly class="hidden-input">
    <input type='text' name='C18' value='0' readonly class="hidden-input">

    <input type='text' name='D1' value='0' readonly class="hidden-input">
    <input type='text' name='D2' value='0' readonly class="hidden-input">
    <input type='text' name='D3' value='0' readonly class="hidden-input">
    <input type='text' name='D4' value='0' readonly class="hidden-input">
    <input type='text' name='D5' value='0' readonly class="hidden-input">
    <input type='text' name='D6' value='0' readonly class="hidden-input">
    <input type='text' name='D7' value='0' readonly class="hidden-input">
    <input type='text' name='D8' value='0' readonly class="hidden-input">
    <input type='text' name='D9' value='0' readonly class="hidden-input">
    <input type='text' name='D10' value='0' readonly class="hidden-input">
    <input type='text' name='D11' value='0' readonly class="hidden-input">
    <input type='text' name='D12' value='0' readonly class="hidden-input">
    <input type='text' name='D13' value='0' readonly class="hidden-input">
    <input type='text' name='D14' value='0' readonly class="hidden-input">
    <input type='text' name='D15' value='0' readonly class="hidden-input">
    <input type='text' name='D16' value='0' readonly class="hidden-input">
    <input type='text' name='D17' value='0' readonly class="hidden-input">
    <input type='text' name='D18' value='0' readonly class="hidden-input">
    
    <input type='text' name='E1' value='0' readonly class="hidden-input">
    <input type='text' name='E2' value='0' readonly class="hidden-input">
    <input type='text' name='E3' value='0' readonly class="hidden-input">
    <input type='text' name='E4' value='0' readonly class="hidden-input">
    <input type='text' name='E5' value='0' readonly class="hidden-input">
    <input type='text' name='E6' value='0' readonly class="hidden-input">
    <input type='text' name='E7' value='0' readonly class="hidden-input">
    <input type='text' name='E8' value='0' readonly class="hidden-input">
    <input type='text' name='E9' value='0' readonly class="hidden-input">
    <input type='text' name='E10' value='0' readonly class="hidden-input">
    <input type='text' name='E11' value='0' readonly class="hidden-input">
    <input type='text' name='E12' value='0' readonly class="hidden-input">
    <input type='text' name='E13' value='0' readonly class="hidden-input">
    <input type='text' name='E14' value='0' readonly class="hidden-input">
    <input type='text' name='E15' value='0' readonly class="hidden-input">
    <input type='text' name='E16' value='0' readonly class="hidden-input">
    <input type='text' name='E17' value='0' readonly class="hidden-input">
    <input type='text' name='E18' value='0' readonly class="hidden-input">

    <input type='text' name='F1' value='0' readonly class="hidden-input">
    <input type='text' name='F2' value='0' readonly class="hidden-input">
    <input type='text' name='F3' value='0' readonly class="hidden-input">
    <input type='text' name='F4' value='0' readonly class="hidden-input">
    <input type='text' name='F5' value='0' readonly class="hidden-input">
    <input type='text' name='F6' value='0' readonly class="hidden-input">
    <input type='text' name='F7' value='0' readonly class="hidden-input">
    <input type='text' name='F8' value='0' readonly class="hidden-input">
    <input type='text' name='F9' value='0' readonly class="hidden-input">
    <input type='text' name='F10' value='0' readonly class="hidden-input">
    <input type='text' name='F11' value='0' readonly class="hidden-input">
    <input type='text' name='F12' value='0' readonly class="hidden-input">
    <input type='text' name='F13' value='0' readonly class="hidden-input">
    <input type='text' name='F14' value='0' readonly class="hidden-input">
    <input type='text' name='F15' value='0' readonly class="hidden-input">
    <input type='text' name='F16' value='0' readonly class="hidden-input">
    <input type='text' name='F17' value='0' readonly class="hidden-input">
    <input type='text' name='F18' value='0' readonly class="hidden-input">

    <input type='text' name='G1' value='0' readonly class="hidden-input">
    <input type='text' name='G2' value='0' readonly class="hidden-input">
    <input type='text' name='G3' value='0' readonly class="hidden-input">
    <input type='text' name='G4' value='0' readonly class="hidden-input">
    <input type='text' name='G5' value='0' readonly class="hidden-input">
    <input type='text' name='G6' value='0' readonly class="hidden-input">
    <input type='text' name='G7' value='0' readonly class="hidden-input">
    <input type='text' name='G8' value='0' readonly class="hidden-input">
    <input type='text' name='G9' value='0' readonly class="hidden-input">
    <input type='text' name='G10' value='0' readonly class="hidden-input">
    <input type='text' name='G11' value='0' readonly class="hidden-input">
    <input type='text' name='G12' value='0' readonly class="hidden-input">
    <input type='text' name='G13' value='0' readonly class="hidden-input">
    <input type='text' name='G14' value='0' readonly class="hidden-input">
    <input type='text' name='G15' value='0' readonl class="hidden-input"y>
    <input type='text' name='G16' value='0' readonly class="hidden-input">
    <input type='text' name='G17' value='0' readonly class="hidden-input">
    <input type='text' name='G18' value='0' readonly class="hidden-input">

    <input type='text' name='I3' value='0' readonly class="hidden-input">
    <input type='text' name='I4' value='0' readonly class="hidden-input">
    <input type='text' name='I5' value='0' readonly class="hidden-input">
    <input type='text' name='I6' value='0' readonly class="hidden-input">
    <input type='text' name='I7' value='0' readonly class="hidden-input">
    <input type='text' name='I8' value='0' readonly class="hidden-input">
    <input type='text' name='I9' value='0' readonly class="hidden-input">
    <input type='text' name='I10' value='0' readonly class="hidden-input">
    <input type='text' name='I11' value='0' readonly class="hidden-input">
    <input type='text' name='I12' value='0' readonly class="hidden-input">
    <input type='text' name='I13' value='0' readonly class="hidden-input">
    <input type='text' name='I14' value='0' readonly class="hidden-input">
    <input type='text' name='I15' value='0' readonly class="hidden-input">
    <input type='text' name='I16' value='0' readonly class="hidden-input">

    <input type='text' name='J5' value='0' readonly class="hidden-input">
    <input type='text' name='J6' value='0' readonly class="hidden-input">
    <input type='text' name='J7' value='0' readonly class="hidden-input">
    <input type='text' name='J8' value='0' readonly class="hidden-input">
    <input type='text' name='J9' value='0' readonly class="hidden-input">
    <input type='text' name='J10' value='0' readonly class="hidden-input">
    <input type='text' name='J11' value='0' readonly class="hidden-input">
    <input type='text' name='J12' value='0' readonly class="hidden-input">
    <input type='text' name='J13' value='0' readonly class="hidden-input">
    <input type='text' name='J14' value='0' readonly class="hidden-input">

    <input type='text' name='K5' value='0' readonly class="hidden-input">
    <input type='text' name='K6' value='0' readonly class="hidden-input">
    <input type='text' name='K7' value='0' readonly class="hidden-input">
    <input type='text' name='K8' value='0' readonly class="hidden-input">
    <input type='text' name='K9' value='0' readonly class="hidden-input">
    <input type='text' name='K10' value='0' readonly class="hidden-input">
    <input type='text' name='K11' value='0' readonly class="hidden-input">
    <input type='text' name='K12' value='0' readonly class="hidden-input">
    <input type='text' name='K13' value='0' readonly class="hidden-input">
    <input type='text' name='K14' value='0' readonly class="hidden-input">

    <input type='text' name='L6' value='0' readonly class="hidden-input">
    <input type='text' name='L7' value='0' readonly class="hidden-input">
    <input type='text' name='L8' value='0' readonly class="hidden-input">
    <input type='text' name='L9' value='0' readonly class="hidden-input">
    <input type='text' name='L10' value='0' readonly class="hidden-input">
    <input type='text' name='L11' value='0' readonly class="hidden-input">
    <input type='text' name='L12' value='0' readonly class="hidden-input">
    <input type='text' name='L13' value='0' readonly class="hidden-input"> -->


<div class="sits__row">
                    <span class="sits__place sits-price--cheap" data-place='A2' data-price='10' id='A2' onclick="updateInputValue('A2', 'A2')">A2</span>
                    <span class="sits__place sits-price--cheap" data-place='A3' data-price='10' id='A3' onclick="updateInputValue('A3', 'A3')">A3</span>
                    <span class="sits__place sits-price--cheap" data-place='A4' data-price='10' id='A4' onclick="updateInputValue('A4', 'A4')">A4</span>
                    <span class="sits__place sits-price--cheap" data-place='A5' data-price='10'>A5</span>
<!-- <span class="sits__place sits-price--cheap" data-place='A6' data-price='10'>A6</span>
        <span class="sits__place sits-price--cheap" data-place='A7' data-price='10'>A7</span>
        <span class="sits__place sits-price--cheap" data-place='A8' data-price='10'>A8</span>
        <span class="sits__place sits-price--cheap" data-place='A9' data-price='10'>A9</span>
        <span class="sits__place sits-price--cheap" data-place='A10' data-price='10'>A10</span>
        <span class="sits__place sits-price--cheap" data-place='A11' data-price='10'>A11</span>
        <span class="sits__place sits-price--cheap" data-place='A12' data-price='10'>A12</span>
        <span class="sits__place sits-price--cheap" data-place='A13' data-price='10'>A13</span>
        <span class="sits__place sits-price--cheap" data-place='A14' data-price='10'>A14</span>
        <span class="sits__place sits-price--cheap" data-place='A15' data-price='10'>A15</span>
        <span class="sits__place sits-price--cheap" data-place='A16' data-price='10'>A16</span>
        <span class="sits__place sits-price--cheap" data-place='A17' data-price='10'>A17</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--cheap" data-place='B1' data-price='10'>B1</span>
        <span class="sits__place sits-price--cheap" data-place='B2' data-price='10'>B2</span>
        <span class="sits__place sits-price--cheap" data-place='B3' data-price='10'>B3</span>
        <span class="sits__place sits-price--cheap" data-place='B4' data-price='10'>B4</span>
        <span class="sits__place sits-price--cheap" data-place='B5' data-price='10'>B5</span>
        <span class="sits__place sits-price--cheap" data-place='B6' data-price='10'>B6</span>
        <span class="sits__place sits-price--cheap" data-place='B7' data-price='10'>B7</span>
        <span class="sits__place sits-price--cheap" data-place='B8' data-price='10'>B8</span>
        <span class="sits__place sits-price--cheap" data-place='B9' data-price='10'>B9</span>
        <span class="sits__place sits-price--cheap" data-place='B10' data-price='10'>B10</span>
        <span class="sits__place sits-price--cheap" data-place='B11' data-price='10'>B11</span>
        <span class="sits__place sits-price--cheap" data-place='B12' data-price='10'>B12</span>
        <span class="sits__place sits-price--cheap" data-place='B13' data-price='10'>B13</span>
        <span class="sits__place sits-price--cheap" data-place='B14' data-price='10'>B14</span>
        <span class="sits__place sits-price--cheap" data-place='B15' data-price='10'>B15</span>
        <span class="sits__place sits-price--cheap" data-place='B16' data-price='10'>B16</span>
        <span class="sits__place sits-price--cheap" data-place='B17' data-price='10'>B17</span>
        <span class="sits__place sits-price--cheap" data-place='B18' data-price='10'>B18</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--cheap" data-place='C1' data-price='10' id='C1'>C1</span>
        <span class="sits__place sits-price--cheap" data-place='C2' data-price='10' id='C2'>C2</span>
        <span class="sits__place sits-price--cheap" data-place='C3' data-price='10'>C3</span>
        <span class="sits__place sits-price--cheap" data-place='C4' data-price='10'>C4</span>
        <span class="sits__place sits-price--cheap" data-place='C5' data-price='10'>C5</span>
        <span class="sits__place sits-price--cheap" data-place='C6' data-price='10'>C6</span>
        <span class="sits__place sits-price--cheap" data-place='C7' data-price='10'>C7</span>
        <span class="sits__place sits-price--cheap" data-place='C8' data-price='10'>C8</span>
        <span class="sits__place sits-price--cheap" data-place='C9' data-price='10'>C9</span>
        <span class="sits__place sits-price--cheap" data-place='C10' data-price='10'>C10</span>
        <span class="sits__place sits-price--cheap" data-place='C11' data-price='10'>C11</span>
        <span class="sits__place sits-price--cheap" data-place='C12' data-price='10'>C12</span>
        <span class="sits__place sits-price--cheap" data-place='C13' data-price='10'>C13</span>
        <span class="sits__place sits-price--cheap" data-place='C14' data-price='10'>C14</span>
        <span class="sits__place sits-price--cheap" data-place='C15' data-price='10'>C15</span>
        <span class="sits__place sits-price--cheap" data-place='C16' data-price='10'>C16</span>
        <span class="sits__place sits-price--cheap" data-place='C17' data-price='10'>C17</span>
        <span class="sits__place sits-price--cheap" data-place='C18' data-price='10'>C18</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--cheap" data-place='D1' data-price='10'>D1</span>
        <span class="sits__place sits-price--cheap" data-place='D2' data-price='10'>D2</span>
        <span class="sits__place sits-price--cheap" data-place='D3' data-price='10'>D3</span>
        <span class="sits__place sits-price--cheap" data-place='D4' data-price='10'>D4</span>
        <span class="sits__place sits-price--cheap" data-place='D5' data-price='10'>D5</span>
        <span class="sits__place sits-price--cheap" data-place='D6' data-price='10'>D6</span>
        <span class="sits__place sits-price--cheap sits-state--not" data-place='D7' data-price='10'>D7</span>
        <span class="sits__place sits-price--cheap sits-state--not" data-place='D8' data-price='10'>D8</span>
        <span class="sits__place sits-price--cheap" data-place='D9' data-price='10'>D9</span>
        <span class="sits__place sits-price--cheap" data-place='D10' data-price='10'>D10</span>
        <span class="sits__place sits-price--cheap" data-place='D11' data-price='10'>D11</span>
        <span class="sits__place sits-price--cheap" data-place='D12' data-price='10'>D12</span>
        <span class="sits__place sits-price--cheap" data-place='D13' data-price='10'>D13</span>
        <span class="sits__place sits-price--cheap" data-place='D14' data-price='10'>D14</span>
        <span class="sits__place sits-price--cheap" data-place='D15' data-price='10'>D15</span>
        <span class="sits__place sits-price--cheap" data-place='D16' data-price='10'>D16</span>
        <span class="sits__place sits-price--cheap" data-place='D17' data-price='10'>D17</span>
        <span class="sits__place sits-price--cheap" data-place='D18' data-price='10'>D18</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--middle" data-place='E1' data-price='20'>E1</span>
        <span class="sits__place sits-price--middle" data-place='E2' data-price='20'>E2</span>
        <span class="sits__place sits-price--middle" data-place='E3' data-price='20'>E3</span>
        <span class="sits__place sits-price--middle" data-place='E4' data-price='20'>E4</span>
        <span class="sits__place sits-price--middle" data-place='E5' data-price='20'>E5</span>
        <span class="sits__place sits-price--middle" data-place='E6' data-price='20'>E6</span>
        <span class="sits__place sits-price--middle" data-place='E7' data-price='20'>E7</span>
        <span class="sits__place sits-price--middle" data-place='E8' data-price='20'>E8</span>
        <span class="sits__place sits-price--middle" data-place='E9' data-price='20'>E9</span>
        <span class="sits__place sits-price--middle" data-place='E10' data-price='20'>E10</span>
        <span class="sits__place sits-price--middle" data-place='E11' data-price='20'>E11</span>
        <span class="sits__place sits-price--middle" data-place='E12' data-price='20'>E12</span>
        <span class="sits__place sits-price--middle" data-place='E13' data-price='20'>E13</span>
        <span class="sits__place sits-price--middle" data-place='E14' data-price='20'>E14</span>
        <span class="sits__place sits-price--middle" data-place='E15' data-price='20'>E15</span>
        <span class="sits__place sits-price--middle" data-place='E16' data-price='20'>E16</span>
        <span class="sits__place sits-price--middle" data-place='E17' data-price='20'>E17</span>
        <span class="sits__place sits-price--middle" data-place='E18' data-price='20'>E18</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--middle" data-place='F1' data-price='20'>F1</span>
        <span class="sits__place sits-price--middle" data-place='F2' data-price='20'>F2</span>
        <span class="sits__place sits-price--middle" data-place='F3' data-price='20'>F3</span>
        <span class="sits__place sits-price--middle" data-place='F4' data-price='20'>F4</span>
        <span class="sits__place sits-price--middle" data-place='F5' data-price='20'>F5</span>
        <span class="sits__place sits-price--middle" data-place='F6' data-price='20'>F6</span>
        <span class="sits__place sits-price--middle" data-place='F7' data-price='20'>F7</span>
        <span class="sits__place sits-price--middle" data-place='F8' data-price='20'>F8</span>
        <span class="sits__place sits-price--middle" data-place='F9' data-price='20'>F9</span>
        <span class="sits__place sits-price--middle" data-place='F10' data-price='20'>F10</span>
        <span class="sits__place sits-price--middle" data-place='F11' data-price='20'>F11</span>
        <span class="sits__place sits-price--middle" data-place='F12' data-price='20'>F12</span>
        <span class="sits__place sits-price--middle" data-place='F13' data-price='20'>F13</span>
        <span class="sits__place sits-price--middle" data-place='F14' data-price='20'>F14</span>
        <span class="sits__place sits-price--middle" data-place='F15' data-price='20'>F15</span>
        <span class="sits__place sits-price--middle" data-place='F16' data-price='20'>F16</span>
        <span class="sits__place sits-price--middle" data-place='F17' data-price='20'>F17</span>
        <span class="sits__place sits-price--middle" data-place='F18' data-price='20'>F18</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--middle" data-place='G1' data-price='20'>G1</span>
        <span class="sits__place sits-price--middle" data-place='G2' data-price='20'>G2</span>
        <span class="sits__place sits-price--middle" data-place='G3' data-price='20'>G3</span>
        <span class="sits__place sits-price--middle" data-place='G4' data-price='20'>G4</span>
        <span class="sits__place sits-price--middle" data-place='G5' data-price='20'>G5</span>
        <span class="sits__place sits-price--middle" data-place='G6' data-price='20'>G6</span>
        <span class="sits__place sits-price--middle" data-place='G7' data-price='20'>G7</span>
        <span class="sits__place sits-price--middle" data-place='G8' data-price='20'>G8</span>
        <span class="sits__place sits-price--middle" data-place='G9' data-price='20'>G9</span>
        <span class="sits__place sits-price--middle" data-place='G10' data-price='20'>G10</span>
        <span class="sits__place sits-price--middle" data-place='G11' data-price='20'>G11</span>
        <span class="sits__place sits-price--middle" data-place='G12' data-price='20'>G12</span>
        <span class="sits__place sits-price--middle" data-place='G13' data-price='20'>G13</span>
        <span class="sits__place sits-price--middle" data-place='G14' data-price='20'>G14</span>
        <span class="sits__place sits-price--middle" data-place='G15' data-price='20'>G15</span>
        <span class="sits__place sits-price--middle" data-place='G16' data-price='20'>G16</span>
        <span class="sits__place sits-price--middle" data-place='G17' data-price='20'>G17</span>
        <span class="sits__place sits-price--middle" data-place='G18' data-price='20'>G18</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--middle" data-place='I3' data-price='20'>I3</span>
        <span class="sits__place sits-price--middle" data-place='I4' data-price='20'>I4</span>
        <span class="sits__place sits-price--middle" data-place='I5' data-price='20'>I5</span>
        <span class="sits__place sits-price--middle" data-place='I6' data-price='20'>I6</span>
        <span class="sits__place sits-price--middle" data-place='I7' data-price='20'>I7</span>
        <span class="sits__place sits-price--middle" data-place='I8' data-price='20'>I8</span>
        <span class="sits__place sits-price--middle" data-place='I9' data-price='20'>I9</span>
        <span class="sits__place sits-price--middle" data-place='I10' data-price='20'>I10</span>
        <span class="sits__place sits-price--middle" data-place='I11' data-price='20'>I11</span>
        <span class="sits__place sits-price--middle" data-place='I12' data-price='20'>I12</span>
        <span class="sits__place sits-price--middle" data-place='I13' data-price='20'>I13</span>
        <span class="sits__place sits-price--middle" data-place='I14' data-price='20'>I14</span>
        <span class="sits__place sits-price--middle" data-place='I15' data-price='20'>I15</span>
        <span class="sits__place sits-price--middle" data-place='I16' data-price='20'>I16</span>
    </div>

    <div class="sits__row additional-margin">
        <span class="sits__place sits-price--expensive" data-place='J5' data-price='30'>J5</span>
        <span class="sits__place sits-price--expensive" data-place='J6' data-price='30'>J6</span>
        <span class="sits__place sits-price--expensive" data-place='J7' data-price='30'>J7</span>
        <span class="sits__place sits-price--expensive" data-place='J8' data-price='30'>J8</span>
        <span class="sits__place sits-price--expensive" data-place='J9' data-price='30'>J9</span>
        <span class="sits__place sits-price--expensive" data-place='J10' data-price='30'>J10</span>
        <span class="sits__place sits-price--expensive" data-place='J11' data-price='30'>J11</span>
        <span class="sits__place sits-price--expensive" data-place='J12' data-price='30'>J12</span>
        <span class="sits__place sits-price--expensive" data-place='J13' data-price='30'>J13</span>
        <span class="sits__place sits-price--expensive" data-place='J14' data-price='30'>J14</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--expensive" data-place='K5' data-price='30'>K5</span>
        <span class="sits__place sits-price--expensive" data-place='K6' data-price='30'>K6</span>
        <span class="sits__place sits-price--expensive" data-place='K7' data-price='30'>K7</span>
        <span class="sits__place sits-price--expensive" data-place='K8' data-price='30'>K8</span>
        <span class="sits__place sits-price--expensive" data-place='K9' data-price='30'>K9</span>
        <span class="sits__place sits-price--expensive" data-place='K10' data-price='30'>K10</span>
        <span class="sits__place sits-price--expensive" data-place='K11' data-price='30'>K11</span>
        <span class="sits__place sits-price--expensive" data-place='K12' data-price='30'>K12</span>
        <span class="sits__place sits-price--expensive" data-place='K13' data-price='30'>K13</span>
        <span class="sits__place sits-price--expensive" data-place='K14' data-price='30'>K14</span>
    </div>

    <div class="sits__row">
        <span class="sits__place sits-price--expensive" data-place='L6' data-price='30'>L6</span>
        <span class="sits__place sits-price--expensive" data-place='L7' data-price='30'>L7</span>
        <span class="sits__place sits-price--expensive" data-place='L8' data-price='30'>L8</span>
        <span class="sits__place sits-price--expensive" data-place='L9' data-price='30'>L9</span>
        <span class="sits__place sits-price--expensive" data-place='L10' data-price='30'>L10</span>
        <span class="sits__place sits-price--expensive" data-place='L11' data-price='30'>L11</span>
        <span class="sits__place sits-price--expensive" data-place='L12' data-price='30'>L12</span>
        <span class="sits__place sits-price--expensive" data-place='L13' data-price='30'>L13</span>
    </div> -->
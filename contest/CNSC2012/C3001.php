<?php require("../../includes/header.php"); ?><h1>Space Component</h1><div class="content">

<p>We the students belonging to IIST, have found an electronic device for space applications. In order to standardize, for measuring the component value<br />
we decided to opt the resistance color coding algorithm. The electronic component contains four bands of colors. Now the electronic department needs<br />
your help for measuring the component value if the four color bands are given.Since it was invented by a student GUNTUR, the component value follows<br />
the unit name 'Guntur' with a space between them.</p>
<p>NOTE: Excluding tolerance color bands like gold and silver</p>

<h3>Input</h3>
<p>Input contains<br />
four strings of colors of resistance color coding with spaces between them.</p>
<h3>Output</h3>
<p>Your output must contain the electronic component value and unit name with a space between them.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
white black blue red

<b>Output:</b>
3696200 Guntur

<b>Explanation</b>
<p>input:white(9) black(0) blue(6) red(2)
output:(36962)<sub>10</sub>=(<u>1001</u> <u>0000</u> <u>0110</u> <u>0010</u>)<sub>b</sub> * 10^2, because last band is red.</p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suryaiist">suryaiist</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
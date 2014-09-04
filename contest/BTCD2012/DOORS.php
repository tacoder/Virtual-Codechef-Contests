<?php require("../../includes/header.php"); ?><h1>Doors</h1><div class="content">

<p>
There are N doors of a palace, all of which are operated by a set of buttons. One day, Alice, who is just 8 years old, gets access to these buttons. Having recently learnt the multiplication tables, she decides to press buttons in a particular order. First, she presses all the buttons that are multiples of 1. Next, she presses all buttons that are multiples of 2, then 3 and so on until N; after which she leaves. </p>
<p>
Each press of button toggles the state of the door, i.e. a door that is open will be closed by the button press and opened if closed initially. </p>
<p>
Given that all doors were closed initially, give the number of doors that are open after she leaves.</p>
<h3>Input</h3>
<p>
The input contains several lines. First line contains the number 't', which represents the number of test cases that follow. This is followed by 't' lines of numbers which represent 'N'. </p>
<p>0 &lt; t &lt; 1000000<br />
0 &lt; N &lt; 100000000 </p>
<h3>Output</h3>
<p> For each input, output the number of doors that are open at the end.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
4
10
16
27

<b>Output:</b>
2
3
4
5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, GO, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PYTH, RUBY, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
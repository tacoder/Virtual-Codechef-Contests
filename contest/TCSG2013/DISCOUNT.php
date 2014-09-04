<?php require("../../includes/header.php"); ?><h1>Discount on Dishes</h1><div class="content">

<p>Chef Polo has opened up a new restaurant. He wants to make it as much popular as he can. Chef has <b>M</b> dishes to serve (numbered from 0 to M-1).<br />
To make his restaurant popular he wants to give discount everyday for a dish. But he has not been able to decide which dish should be discounted on a particular day. So he takes help from<br />
his friend Palin. Palin has come up with a unique algorithm<br/><br />
He has choosen 3 secret numbers, <b> A,B,C</b> to start with<br />
<br/><br />
His unique algorithm says:<br/><br />
On day 1 choose dish no. <b>A</b>.<br />
(Now keep track of day numbers.)<br/><br />
Now on nth day: suppose dish chosen on day n-1 was <b>K</b><br/><br />
If n is even, choose<b> (K+B)<sup>th</sup></b> dish<br/><br />
otherwise, choose<b> (K*C)<sup>th</sup></b> dish<br/><br />
Offcourse he will take MOD of dish number thus found with <b>M</b> (because he has only M dishes)<br/><br />
<b>Example</b><br/> If A=5, B=3, C=2, M=20<br/><br />
Then dishes chosen for first 5 days will be 5,8,16,19,18<br />
<br/><br/><br />
Chef Polo is too much curious about future<br />
so he wants to know which dish will be discounted on <b>n<sup>th</sup></b> day. But he is busy with preparing<br />
the dishes So he wants your help.<br />
</br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Input</h3>
<p>first line contains <b>T</b>, the no of test cases<br/><br />
Each of next <b>T</b> lines contains 5 integers <b>A,B,C,n,M</b><br />
</br/></p>
<h3>Output</h3>
<p>For every testcase the only line should contain single integer, answer to the problem</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>A,B,C,n,M</b> ≤ <b>10^9</b></li>
<li><b>A</b> &lt; <b>M</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 2 3 4 5
6 7 8 9 10

<b>Output:</b>
1
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuldeepfouzdar">kuldeepfouzdar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
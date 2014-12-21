<?php require("../../includes/header.php"); ?><h1>A Million Miles</h1><div class="content">
<p>
Jack is fond of wandering around his hometown. Everyday he goes for a walk<br />
around his hometown starting from a particular place and ending at another place.<br />
Now let us consider that his hometown's map can be represented in a 2 dimensional plane.<br />
Considering Jack knows from where he will start his walk(coordinates) and where he will<br />
end it(coordinates),he wants to know in how many ways he can reach his destination provided<br />
he follows the following set of rules.<br />
 The first rule is that he starts and ends at coordinates<br />
which satisfy reflexive property.<br />
The second rule is that in every step of the walk the <b>Y</b> coordinate must be less than or equal to the <b>X</b> coordinate and he can travel in right,up or down directions only.<br />
The third rule is that in each step he can only travel to integral coordinates i.e no fractional value will be<br />
entertained<br />
.</p>
<p> </p>
<h3>Input</h3>
<p>
The first line of the input contains <b>T</b> testcases<br />
. The next <b>T</b> lines  contains  4 coordinates  <b>(X1,Y1)</b> the starting coordinates and<b> (X2,Y2)</b>the ending coordinates in each of the line</p>
<h3>Output</h3>
<p>For every test case output a single integral value denoting the maximum number of possible ways   </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>-10^6</b> ≤ <b>(X,Y)</b> ≤ <b>10^6</b></li>
<li> <b>X1</b> ≤ <b>X2</b></li>
<li> <b>Y1</b> ≤ <b>Y2</b></li>
</ul>
<pre><b>Input:</b>
3
1 1 1 1
1 1 2 2
1 1 4 4

<b>Output:</b>
1
1
5

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ram2691">ram2691</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>
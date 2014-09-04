<?php require("../../includes/header.php"); ?><h1>Memoirs of Fili and Kili</h1><div class="content">

<p>The journey was a long and arduous one. And most of them started getting bored, sitting on their horses all day with nothing to do. Some of them (read Fili and Kili) were even beginning to be vocal about it. To shut them up, Gandalf decided to give them a puzzle to keep them occupied. Fili and Kili were really good with numbers (so they said), so Gandalf decided to make the problem a little more difficult for them. </p>
<p>Gandalf has an even number of gold coins in his pocket – ‘p’ pairs to be precise and he would provide some clues to Fili and Kili so that they can come up the right answer as to what the value of ‘p’ is.</p>
<p>If there is another number ‘x’ which is divisible by both ‘a’ and ‘b’ such that the product ‘ab’ is equal to ‘x’ itself and a<sup>ᵠ(b)</sup>≡ 1 (mod b) where ᵠ(b) gives the number of positive integers (&lt;=b) that are relatively prime to ‘b’. ‘p’ is equal to the sum of integers present in all such unique pairs. Find ‘p’.<br />
<b></b></p>
<p>By unique pairs we mean that (a,b) and (b,a) are same so must be considered only once for computation of p.</p>
<p>For eg:<br />
For a number x let’s say that (a,b,c,d) are it’s factors and (a,b) and (c,d) satisfy the above condition then you have to output a+b+c+d
</p>
<p></p>
<h3>Input</h3>
<p>The first line of the input contains an integer t denoting the number of testcases.</p>
<p>Each testcase contains a single line containing the value of integer x.</p>
<h3>Output</h3>
<p>For each testcase output a single line containing the value of p.</p>
<h3>Constraints</h3>
<p>1&lt;=t&lt;=30000</p>
<p>2&lt;=x&lt;=10<sup>7</sup>		</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
41
18467
6334


<b>Output:</b>
42
18840
9504
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/troika_bytes13">troika_bytes13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2013</td>
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
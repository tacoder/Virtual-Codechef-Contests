<?php require("../../includes/header.php"); ?><h1>DeoriaTheGreatCity</h1><div class="content">
<p>Problem Description</p>
<p><b>KOOL</b> is back.
</p>
<p>
Now <b>KOOL's</b> girlfriend <b>KOOLER</b> left him because of some runtime issues.  To be precise the issue with KOOL is the following :</p>
<ul>
<li> Being human he can remember only few number of  friends( Say it is <b>N</b>).</li>
<li> He forgets the friend he interacted least recent. </li>
<li> He makes new friend and forgets the old. </li>
</ul>
<p>You have to mimic the KOOL's brain.<br />
You have to answer the queries. The queries are of following types :</p>
<ol>
<li><b>1 I </b>:  He interacted with friend having ID number=I.</li>
<li><b>2 I </b>: Answer "YES" if KOOL can remember the friend with ID number = I otherwise "NO".</li>
</ol>

<h3>Input</h3>
<ul>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. Then,for every test case, first line contains two space separated integers N(Capacity of KOOL brain) and Q(number of Queries ) . Then Q lines contains the queries.</ul>
<h3>Output</h3>
<p>For each test case , output the answer of the every query of type 2.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000 (10<sup>3</sup>)</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10000 (10<sup>4</sup>)</b></li>
<li><b>1</b> ≤ <b>I</b> ≤ <b>10000 (10<sup>4</sup>)</b></li>
<h3>Example</h3>
<pre><b>Sample Input:</b>
1
2 5
1 1
1 2
1 3
2 1
2 2

<b>Sample Output:</b>
NO
YES

<b>Explanation:</b>
Here the capacity of KOOL brain is 2.
He interacts with 1-&gt;2-&gt;3 ID number friends. He forgot friend with ID number 1 
and remember only 2,3. So answer is NO and then YES . 
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cdev">cdev</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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
<?php require("../../includes/header.php"); ?><h1>Chefs in Queue</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/CHFQUEUE.pdf">here</a></h3>
<p>All the chefs (except the Head Chef) are standing in queue to submit their bills. The chefs have different seniority. In all there are <b>N</b> chefs of <b>K</b> different seniority levels. Head Chef gets an interesting thought past his head. He begins to think what if every chef starting from the end of the queue begins to delegate his job of submitting bills to a chef least ahead of him in the queue but junior to him. The Head Chef's fearfulness of this scenario is <b>f = i2 - i1 + 1</b>, where <b>i1</b> is the index of chef in queue and <b>i2</b> is the index of the junior chef. Head Chef's total fearfulness of chaos is the product of all the fearfulness in Head Chef's mind. Note if a chef has no junior ahead of him/her in the queue then Head Chef's fearfulness for this Chef is <b>1</b>. You are required to find the Head Chef's total fearfulness given an arrangement of Chef's in a queue. Since this number can be quite large output it modulo <b>1000000007</b>. </p>
<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line contains two integers <b>N</b> and <b> K </b> denoting the number of chefs and the number of seniority levels. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the seniority of chefs in the queue. <b>A<sub>N</sub></b> denotes front of the queue and <b>A<sub>1</sub></b> denotes end of the queue. </li>
</ul>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>Output a single integer denoting the total fearfulness of the Head Chef. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000000</b></li>
<li><b>1</b> ≤ <b>a_i</b> ≤ <b>1000000</b></li>
<li><b>2</b> ≤ <b>K</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 1 2

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Only the second chef has a junior in front of him and the fearfulness he causes to the head chef is 3 - 2 + 1 = 2. Every other chef causes a fearfulness of 1 for the Head Chef.</p>
<h3>Scoring</h3>
<p><b>Subtask 1 : N &lt;= 5000 ( 10 points)</b> <br /><br />
<b> Subtask 2 : K = 2 ( 10 points) </b> <br /><br />
<b> Subtask 3 : K &lt;= 10 ( 20 points ) </b> <br /><br />
<b> Subtask 4 : See Constraints ( 60 points ) </b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-10-2013</td>
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
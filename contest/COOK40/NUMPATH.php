<?php require("../../includes/header.php"); ?><h1>Number of Paths</h1><div class="content">
<h3>Read problems statements in Russian <a href="/download/translated/COOK40/russian/NUMPATH.pdf" target="_blank">here</a></h3>
<p>The Head Chef is interested in studying interactions between his chefs . There are <b> N </b> chefs with ids 1 to N . Each chef trusts some of the other chefs . The relation of trust is one way . Also , a chef may trust chefs only with ids strictly greater than his/her id .A chef with id = i , trusts the chefs with next n<sub>i</sub> id's.</p>
<p>The Head Chef wants to know given a chef B and a set of chefs S,  how many lines of trust exist between each element of S and B . A line of trust between chefs A and B is a sequence of chefs a<sub>1</sub> ... a<sub>k</sub> starting at A ( a<sub>1</sub> = A )and finishing at B  (A<sub>k</sub> = B) such that A<sub>i</sub> trusts A<sub>(i+1) </sub> for all i ( 1 to k-1) . Two lines of trust are different if they have a different chef at the some position in the line .</p>
<p><br /><br /> Since the answer may be quite large , output it modulo 1000000007 .</p>
<h3>Input</h3>
<ul>
<li>The first line contains a two space seperated integers <b>N</b> and <b> B</b> denoting the number of chefs and the target chef for whom the lines of trust have to be calculated. </li>
<li>The next <b> N</b> lines contains an integer <b> n<sub>i</sub></b> denoting the number of chefs which are trusted by the chef with id = i . </li>
<li> The next line contains a single integer <b> Q </b> denoting the number of queries </li>
<li> The next <b> Q </b> lines contain elements of set <b>S</b> . </li>
</ul>
<h3>Output</h3>
<ul>
<li>Output a single line for each query containing the answer to the query.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200000</b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>Each element of set S </b> &lt; <b>B</b></li>
<li><b>1</b> ≤ <b>i + n<sub>i</sub> ( for i = 1 to N ) </b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>n<sub>i</sub> ( for i = 1 to N ) </b> ≤ <b>N - 1</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 3
2
1
0
2
1
2
<b>Output:</b>
2
1
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The lines of trust between 1 and 3 are <br /><br /> 1 , 3 <br /><br /> 1 , 2 ,3 <br /><br /> There is one line of trust between 2 and 3 which is <br /><br /> 2 3</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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
<?php require("../../includes/header.php"); ?><h1>Jail Break</h1><div class="content">
<p>Elizabeth Swann is trapped in a jail by the Britishers. Will needs to break her out from the prison. In order to set Elizabeth free, Will needs to set a valid sequence in the prison lock. The lock is made of <b>N</b> numeric boxes. There are already some numbers written on that boxes. The <b>i<sup>th</sup></b> textbox has value <b>S<sub>i</sub></b> written initially. Will can increase or decrease a number <b>S<sub>i</sub> (1&lt;=i&lt;=N)</b> by <b>X</b> and this operation costs him <b>X</b> units of time. </p>
<p>Will has to convert the sequence into a valid sequence to open the lock and escape. A sequence <b>{D<sub>1</sub>,D<sub>2</sub>,D<sub>3</sub>..D<sub>i</sub>..D<sub>N</sub>}</b> is valid if and only if there exists a <b>t (1&lt;=t&lt;=N)</b> such that:<br /><b>D<sub>1</sub> &lt; D<sub>2</sub> &lt; D<sub>3</sub>.... &lt; D<sub>t</sub> and D<sub>t</sub> &gt; D<sub>t+1</sub> &gt; ....D<sub>N</sub>.</b></p>
<p>Will wants to spend minimum amount of time as the english soldiers of the East India company are right behind him. So he has asked you to calculate the minimum amount of time he would need to convert a given sequence into a valid sequence. Help Will to save Elizabeth.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of numeric boxes in the lock.<br />
The next line contains <b>N</b> space separated integers representing the initial number written on each of the box giving <b>S<sub>1</sub> S<sub>2</sub> S<sub>3</sub> ... S<sub>N</sub>.</b></p>
<h3>Output</h3>
<p>The output consist of a single integer giving the minimum amount of time needed to convert the given sequence into a valid sequence. </p>
<h3>Constraint</h3>
<ul>
<li><b>1</b> &lt;= <b>N</b> &lt;= <b>3719</b></li>
<li><b>1</b> &lt;= <b>S<sub>i</sub></b> &lt;= <b>8737</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input</b>
5
3 1 2 2 4
<b>Output</b>
4
</pre><p><br /></p>
<pre><b>Input</b>
5
1 2 3 4 5
<b>Output</b>
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divanshu">divanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
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
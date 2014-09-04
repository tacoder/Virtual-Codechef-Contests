<?php require("../../includes/header.php"); ?><h1>Sherlock and Prince of Persia</h1><div class="content">
<p> </p>
<p>Sherlock is playing Prince of Persia where there are <strong>N </strong>levels. Each level requires certain amount of time to finish. Every level is also characterised by two other parameters <strong>XP_needed </strong>and <strong>XP_gain</strong>. The time units need to finish, minimum experience needed and experience gain of the i-th level is given by <strong>T[ i ]</strong> , <strong>XP_needed[ i ] </strong>and <strong>XP_gain[ i ]</strong>, respectively. Sherlock can play the <strong>i</strong>-th level if his current XP is greater than or equal to <strong>XP_needed[ i ]</strong>. Once he finishes the i-th level his XP will increase by <strong>XP_gain[ i ]</strong>.  Sherlock is busy working on a case and he has <strong>X</strong> time units to spare. His initial XP is <strong>Y</strong>. He wants to complete as many levels as possible within the time. Help him find out the maximum number of levels he can play and the minimum XP that he would have required to finish that many levels within <strong>X</strong> units of time. (XP cannot be negative)</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>First line contains three space separated integers N, X and Y.</li>
<li>Next N lines contains three space separated integers. The (i+1)th line contains the description of the i-th level - XP_needed[ i ], T[ i ] and XP_gain[ i ].</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Print two space separated integers - The maximum number of levels Sherlock can attend and the minimum XP he would have needed to finish these levels.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>N</strong> ≤ <strong> 100 </strong></li>
<li><strong>0</strong> ≤ <strong>T[i]</strong> ≤ <strong> X </strong> ≤ <strong> 10000</strong> </li>
<li><strong>0</strong> ≤ <strong>XP_needed[ i ], XP_gain[ i ], Y</strong> ≤ <strong> 10^7 </strong></li>
<p><strong> </strong>
</p></ul>
<p><strong> </strong></p>
<p> </p>
<h3>Example</h3>
<pre><strong>Input:</strong>
4 13 6
6 11 2
5 10 1
8 1 2
8 1 2
<br />
<strong>Output:</strong>
3 6
</pre><p> </p>
<p> </p>
<p><strong>Explanation</strong><br />
Sherlock will complete three levels:<br />
one of the possible order is :<br />
1-&gt;3-&gt;4.<br />
He needs at least 6 Xp to complete three levels.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2014</td>
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
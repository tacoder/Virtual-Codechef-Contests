<?php require("../../includes/header.php"); ?><h1>Bi Potions</h1><div class="content">

<p>Its time for the Potions class and Professor Snape is hell-bent on giving a detention to Harry. Today's class has a long table on which <b>N</b> elemental potions (numbered from 1 to <b>N</b>) are arranged. The queerness of the ith potion is <b>A[i]</b>. A unique bipotion can be obtained by mixing together small quantities of exactly two distinct elemental potions. Each unordered pair of distinct elemental potions corresponds to a different bipotion. The queerness of a bipotion is the product of the queernesses of the two elemental potions from which it was obtained.</p>
<p>Professor Snape performs <b>Q</b> actions during the course of the class. The ith action is specified by 3 integers, as follows : </p>
<p>0 <b>q1</b> <b>q2</b> : He replaces the potion at the <b>q1</b>'th position with a potion of queerness <b>q2</b>. <br />1 <b>q1</b> <b>q2</b> : He points to two potions <b>q1</b> and <b>q2</b> (st <b>q1</b>&lt;<b>q2</b>). In response to this, Harry must report the total queerness of all possible bipotions that can be obtained using the elemental potions numbered from <b>q1</b> to <b>q2</b> (inclusive).</p>
<p>Harry gets a detention if he answers any of the queries wrongly. You must help him to avoid getting one.</p>
<h3>Input</h3>
<p>The first line of input consists of a single integer <b>N</b>.<br />
The second line contains <b>N</b> integers, <b>A[1], A[2] .. A[N]</b>. (Note that potions are allowed to have negative queerness.)<br />
The third line contains a single integer <b>Q</b>.<br />
<b>Q</b> lines follow. Each of these lines consists of 3 space-seperated integers : <b>tp</b>,<b>q1</b>,<b>q2</b>.
</p>
<h3>Output</h3>
<p>Correctly formatted output consists of one line for each action with <b>tp</b>=1. Each of these lines must consist of a single integer: the number that Harry must report in response to that particular action.
</p>
<h3>Constraints</h3>
<p>2&lt;=<b>N</b>&lt;=100000</p>
<p>-1000&lt;=<b>A[i]</b>&lt;=1000</p>
<p>1&lt;=<b>Q</b>&lt;=100000</p>
<p>0&lt;=<b>tp</b>&lt;=1</p>
<p>if <b>tp</b>=0, 1&lt;=<b>q1</b>&lt;=<b>N</b> and -1000&lt;=<b>q2</b>&lt;=1000</p>
<p>if <b>tp</b>=1, 1&lt;=<b>q1</b>&lt;<b>q2</b>&lt;=<b>N</b>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
5 4 3 2 1
3
1 2 4
0 3 7
1 2 4 

<b>Output:</b>
26
50
</pre><h3>Explanation</h3>
<p>The queerness sequence at the time of the first query is [5,4,3,2,1].<br />
The queried section is [4,3,2].<br />
2*3 + 3*4 + 2*4 = 6 + 12 + 8 = 26.<br />
The queerness sequence at the time of the first query is [5,4,7,2,1].<br />
The queried section is [4,7,2].<br />
2*7 + 7*4 + 2*4 = 50.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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
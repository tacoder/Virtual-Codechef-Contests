<?php require("../../includes/header.php"); ?><h1>KBC</h1><div class="content">

<p>Mr. Leonard is hosting a new Gift Hamper round in Kaun Banega Code-pati, a famous coding game. Questions are displayed on the computer which have to be answered and accordingly scores are given. The person playing the round knows only his or her score. All the participants sit in a line and each of them has a rating according to his or her performance. Atleast one gift hamper is granted to all the participants playing this round. Mr. Leonard must give a gift hamper according to their scores, such that, if any adjacent participant's score is higher than the person sitting next to him, the one with the higher score must get more gift hampers than the other. KBC wants to save its money so it wants to give as few gift hampers in total.</p>
<h3>Input</h3>
<p>The first line of the input contains no. of test cases T followed by integer N, the number of participants in KBC. Each of the following N lines contains an integer indicates the score of each participant.</p>
<h3>Output</h3>
<p>On the only line of the output print an integer describing the minimum number of gift hampers KBC must give.</p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 2

4
1 2 3 2


<b>Output:</b>
4
7
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Case 1.</b>The number of gift hampers KBC must give are 1,2 and 1. One gift hamper is gifted to all the 3 participants. When the scores of the 1st and 2nd participants are compared, 2nd participant having a higher score wins a gift hamper. When 2nd and 3rd participants’ scores are compared, both do not win any gift hamper. </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-04-2013</td>
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
<?php require("../../includes/header.php"); ?><h1>Jack Vs Jill</h1><div class="content">

<p>Jack and Jill got into a serious fight. Jack didn't not belive Jill when she said that her memory was far better than the others. He asked her to prove it as follows :- </p>
<ul>
<li> Jack would dictate a long list of numbers to her. At any point after he has dictated  at least "k" numbers, he can ask her what is the k-th minimum number (the k-th number if the numbers are arranged in increasing order) in the list so far. </li>
<li> She succeeds in proving herself if she can tell the k-th minimum number every time he asks. </li>
<li> The number of queries (dictate a new number or ask her the k-th minimum of the numbers given till then) has to be pre-decided before he starts asking. </li>
<p>
Jill succeeded in proving herself by convincing Jack quite a few times. Now, Jill remembered that Jack had claimed that he was good at programming. It's her turn to ask him to prove his skill. Jack doesn't want to lose to her and comes to you for help. He asks you to make the program for him. </p>
<h3>Input</h3>
<p>Jill has agreed to let Jack decide the format of the input and here's what he has decided. First line of the input contains <b>n</b>, the number of queries. Next line contains <b>k</b>. Next n lines contain a query each, say <b>q</b>. If <b> q >= 0 </b> then the number is being 'dictated' to the system and needs to be remembered. If <b>q = -1</b>, then your program should return the <b>k-th minimum number presented so far </b>. It is given that 'q' can be -1 only if at least k numbers have already been given.</p>
<h3>Output</h3>
<p> For every q = -1, you have to output the k-th minimum number given as input so far (not counting -1 as an input)</p>
<h3>Example</h3>
<pre>
<b>Input1:</b>
6
2
3
2
-1
-1
1
-1

<b>Output1:</b>
3
3
2
</pre><pre>
<b>Input2:</b>
10
5
3
6
1
4
2
9
3
1
0
-1

<b>Output2:</b>
3
</pre></ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-08-2012</td>
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
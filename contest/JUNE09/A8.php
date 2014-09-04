<?php require("../../includes/header.php"); ?><h1>The Bytelandian Union</h1><div class="content">

<p>Byteland is a strange country, with many cities, but with a poorly developed road network (in fact, there is exactly one route from each city to any other city, possibly leading through other cities). Until recently, the cities of Byteland were independently governed by proud Mayors, who chose not to integrate too tightly with their neighbours. However, recent opinion polls among Bytelandian computer programmers have shown a number of disturbing trends, including a sudden drop in pizza consumption.<br />
Since this had never before happened in Byteland and seemed quite inexplicable, the Mayors sought guidance of the High Council of Wise Men of Byteland. After a long period of deliberation, the Council ruled that the situation was very serious indeed: the economy was in for a long-term depression! Moreover, they claimed that tighter integration was the only way for the Bytelandian cities to survive. Whether they like it or not, the Mayors must now find a way to unite their cities as quickly as possible. However, this is not as easy as it sounds, as there are a number of important constraints which need to be fulfilled:</p>
<ul>
<li>Initially, each city is an independent State. The process of integration is divided into steps.
</li><li>At each step, due to the limited number of diplomatic envoys available, a State can only be involved in a unification process with <i>at most one</i> other state. At each step two States can unite to form a new State, but only if there exists a road directly connecting some two cities of the uniting States.
</li><li>The unification process is considered to be complete when all the cities belong to the same, global State.
</li></ul>
<p>
The Mayors have asked you to arrange a schedule for the diplomatic talks, so that unification can be completed in as few steps as possible. Can you handle this delicate task?<sup>a)</sup></p>
<h3>Input</h3>
<p>The first line contains <i>t</i>, the number of test cases (less than 1000). The descriptions of <i>t</i> test cases follow.</p>
<p> Each test case contains the description of the cities of Byteland, given in two lines. The first line contains a single integer <i>k</i>, representing the number of cities in Byteland (2 &lt;= <i>k</i> &lt;= 600); we assume that the cities are numbered 0,...,<i>k</i>-1. The second line contains exactly <i>k</i>-1 integers, and the <i>i</i>-th integer having a value of <i>p</i> represents a road connecting cities having numbers <i>i</i>+1 and <i>p</i> in Byteland.</p>
<h3>Output</h3>
<p>For each test case, output a separate line containing one number, equal to the minimum number<br />
of steps required to perform the unification.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4
0 1 2
8
0 1 2 0 0 3 3
9
0 1 1 1 1 0 2 2

<b>Output:</b>
2
4
5
</pre><p>
<sup>a)</sup> Some conspiracy theorists claim that this task has in fact nothing to do with unification, and that it was proposed by pizza parlour lobbyists simply to boost their direct revenue at your expense. But don't worry, in any case, you are helping Byteland out of depression!</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>40 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
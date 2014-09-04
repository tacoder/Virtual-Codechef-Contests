<?php require("../../includes/header.php"); ?><h1>Java and Haskell</h1><div class="content">

<p>The kingdoms of Java and Haskell are at war with each other. To win the war, Haskell needs to disrupt the communication between the financial and the administrative capital cities of Java named <i>UTIL</i> and <i>LANG</i>. There are <i>m</i> strategic points(towns or cities) in the kingdom of Java. There is no direct road between the cities <i>UTIL</i> and <i>LANG</i>. The communication between the two cities is by means of roads passing through strategic points. There is AT MOST one direct road between any two strategic points. Every road has a single bridge. There is a cost associated with blowing up a bridge or bribing a town's mayor to stop all traffic passing through the town. Both the cities can communicate with each other if there is at least one sequence of roads with non-blown up bridges and non-bribed towns that leads from one city to the other. Your task is to find the minimum cost that Haskell has to spend to disrupt the communication between the capital cities of Java. Assume that the city heads of <i>UTIL</i> and <i>LANG</i> can't be bribed.</p>
<p> </p>
<h3>Input</h3>
<p>First line of input is number of test cases <i>T</i>, after which <i>T</i> test cases follow. Each test case specifies two integers <i>m</i>(number of strategic points) and <i>n</i>(number of roads) on the first line separated by space. After that m-2 lines follow each corresponding to town numbers 2 through m-1 in serial order, containing one integer <i>b</i> that denotes the bribe required to be paid to its mayor for closing the communication through that town. Afterwards <i>n</i> lines follow, each containing 3 space separated integers <i>u</i>, <i>v</i> and <i>c</i>; where <i>u</i> and <i>v</i> are the town numbers through which the road passes and <i>c</i> is the cost of blowing up the bridge on that road. UTIL and LANG have strategic point IDs of <i>1</i> and <i>m</i> respectively.
</p>
<h3>Output</h3>
<p>For each test case output a single line containing a single integer i.e. the minimum cost of disrupting communication between <i>UTIL</i> and <i>LANG</i> for that test case. Output <i>0</i> for a case when the communication is already disrupted between the two cities.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>m</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 4
2
5
3 1 3
4 3 3
4 2 1
2 1 3
4 4
2
2
2 1 3
3 1 3
4 2 1
4 3 3
<b>Output:</b>
4
3
</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prabhakar97">prabhakar97</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2013</td>
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
            <td>ASM, BASH, C, C99 strict, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, JAVA, JS, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
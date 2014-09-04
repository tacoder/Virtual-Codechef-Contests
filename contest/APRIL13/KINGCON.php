<?php require("../../includes/header.php"); ?><h1>Kingdom Unity</h1><div class="content">

<p>The Kingdom of Bytelandia has <b>N</b> cities, numbered from <b>0</b> to <b>N</b>−<b>1</b>. There are <b>M</b> bidirectional roads, each of which connects two different cities. The road network in the kingdom is such that people of any city can reach any other city they desired through the road network. This is called having <i>unity</i> in the kingdom. Bytelandia is very famous for its unity. The people are united and familiar with each other. The king of Bytelandia is also very proud of this fact.</p>
<p>But, <b>some people just want to watch the world burn</b>. Dr. Bobo is one of such people. He is very wicked. He doesn't like <i>unity</i> of Bytelandia. He has a chemical missile to spread diseases. He plans to attack one of the cities of Bytelandia.</p>
<p>The king's secret intelligence service became aware of Dr. Bobo's wicked plan and informed the king about it. The king could not catch Dr. Bobo hence he is a genius. So the king planned the rescue mission with his own defense system. The scientists of Bytelandia have made one kind of shields which can protect an entire city from the attack of Dr. Bobo's missile. The shield will not affect the road network, in the sense that a citizen can still travel on the roads connected to a protected city. But the shields are very very expensive to build.</p>
<p>The king also has a team of brilliant doctors, who have already discovered the cure for the disease which the missile will spread. But they can only handle one city at a time. The king has planned his rescue mission as follows:</p>
<p>If a shielded city is attacked by the missile, then no one is harmed. If a city without a shield is attacked, all the roads connected to that city will be closed to prevent the disease from spreading to the other cities. Then, the doctors will begin to cure each citizen of that city and as a precautionary measure, none of those citizens are allowed to leave the city until each and every of them is cured. It will take a very long time to cure an entire city.</p>
<p>Taking a long time to cure an attacked city will affect the road network of the kingdom. The roads which are closed due to the attack can not be used until the affected city is entirely cured. This would have an adverse affect on the kingdom's <i>unity</i>, which the king would never want, especially at the time of crisis because in that case Dr. Bobo would have achieved his evil goal of dividing the people.</p>
<p>The king can make as many shields as he wants but as we know, they are very expensive. So, he would let a city be attacked and then be cured by his doctors rather than pay to plant a shield over a city, as long as it will not affect the unity of the remaining kingdom. That is, city <b>x</b> must be protected by the shield if there exists a pair of cities (except city <b>x</b>) such that people cannot come and go between these cities when the roads connected city <b>x</b> are closed. He doesn't want to make unnecessary shields. He wants you to find the minimum amount of money that is needed to make the shields to prevent Mr. Bobo from succeeding in his evil plan.</p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow. First line of each test case contains <b>3</b> space-separated integers <b>N</b>, <b>M</b>, and <b>K</b>, denoting number of cities, the number of bidirectional roads, and the cost to make one shield, respectively. Then <b>M</b> lines follow each containing <b>2</b> space-separated integers <b>A</b> and <b>B</b>, denoting that there is a road between city <b>A</b> and city <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output the minimum amount of money required to fulfill the king's requirements and protect <i>unity</i> of his kingdom.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1500</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>3000</b></li>
<li><b>N</b>−<b>1</b> ≤ <b>M</b> ≤ <b>N</b>*(<b>N</b>−<b>1</b>)/<b>2</b>)</li>
<li><b>0</b> ≤ <b>A</b>, <b>B</b> ≤ <b>N</b>−<b>1</b>, <b>A</b> ≠ <b>B</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>1000</b></li>
<li>The road network has <i>unity</i></li>
<li>No two roads connect the same pair of cities</li>
<li>The sum of <b>N</b> in one test file does not exceed <b>3000</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
7 6 5
0 1
1 2
3 4
2 4
2 6
5 2

<b>Output:</b>
15
</pre><h3>Explanation</h3>
<p>
In the sample, the cities <b>1</b>, <b>2</b>, and <b>4</b> must be protected by the shields.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/jay_adm">jay_adm</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-01-2013</td>
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
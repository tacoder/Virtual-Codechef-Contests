<?php require_once("../../includes/header.php"); ?><h1>Chef and A Large Permutation</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/CLPERM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/CLPERM.pdf">Russian</a>.</h3>
<p>Today is Chef's birthday. His mom gifted him a truly lovable gift, a permutation of first <b>N</b> positive integers.</p>
<p>She placed the permutation on a very long table in front of Chef and left it for him to play with it. But as there was a lot of people coming and wishing him. It was interfering with his game which made him very angry and he banged the table very hard due to which <b>K</b> numbers from the permutation fell down and went missing.</p>
<p>Seeing her son's gift being spoilt, his mom became very sad. Chef didn't want his mom to be sad as he loves her the most. So to make her happy, he decided to play a game with her with the remaining <b>N - K</b> numbers on the table. Chef wants his mom to win all the games.</p>
<p>Chef and his mom play alternatively and optimally. In <b>Xth</b> move, a player can choose some numbers out of all the numbers available on the table such that chosen numbers sum up to <b>X</b>. After the move, Chosen numbers are placed back on the table.The player who is not able to make a move loses.</p>
<p>Now, Chef has to decide who should move first so that his Mom wins the game.</p>
<p>As Chef is a small child, he needs your help to decide who should move first. Please help him, he has promised to share his birthday cake with you :)</p>
<h3>Input</h3>
<ul>
<li>First Line of input contains a single integer <b>T</b> denoting the number of test cases. </li>
<li>First line of each test case contains two space separated integers <b>N</b> and <b>K</b> denoting the size of<br />
 permutation and number of numbers fall down from the table. </li>
<li>Next line of each test case contains <b>K</b> space separated integers denoting the values of missing numbers.</li>
</ul>
<h3>Output</h3>
<p>For each test case, print <b>"Chef"</b> if chef should move first otherwise print <b>"Mom"</b> (without quotes).</p>
<h3>Constraints</h3>
<ul>
<li> <b>1 ≤ T ≤ 10<sup>5</sup>, 1 ≤ N ≤ 10<sup>9</sup></b></li>
<li><b>0 ≤ K ≤ min(10<sup>5</sup>, N)</b></li>
<li>All <b>K</b> numbers are distinct.</li>
<li>Value of each of <b>K</b> number belongs to <b>[1,N]</b>.</li>
<li>Sum of <b>K</b> over all the test cases does not exceed <b>5*10<sup>5</sup>.</b></li>
</ul>
<h3>Scoring</h3>
<ul>
<li>Subtask 1 (13 pts): 1  ≤  <b>T</b>  ≤  100, 1  ≤  <b>N</b>  ≤   10<sup>2</sup>, 1  ≤  K &lt; N. </li>
<li>Subtask 2 (17 pts): 1  ≤  <b>T</b>  ≤  100, 1  ≤  <b>N</b>  ≤   10<sup>5</sup>, K = 0. </li>
<li>Subtask 3 (70 pts): Original Constraints. </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
2
5 2
3 5
5 1
1
<b>Output</b>
Mom
Chef
</pre><h3>Explanation</h3>
<p>For test case 1.</p>
<ul>
<li> Mom can choose {1} to make 1.</li>
<li> Chef can choose {2} to make 2.</li>
<li> Mom can choose {1,2} to make 3.</li>
<li> Chef can choose {4} to make 4.</li>
<li> Mom can choose {1,4} to make 5.</li>
<li> Chef can choose {2,4} to make 6.</li>
<li> Mom can choose {1,2,4} to make 7.</li>
<li> Chef cannot make 8 out of the numbers on the table.</li>
</ul>
<p> So,Chef loses and Mom wins.
 </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ma5termind">ma5termind</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>
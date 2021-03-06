<?php require("../../includes/header.php"); ?><h1>Chefs Game</h1><div class="content">

<p style="text-align:justify">Chef loves that his cooks involve themselves in group activities.<br />
	This month, Chef has involved his cooks in a rather very curious game.<br />
	It involves all his cooks, standing in a circle. Each cook is given one integer to keep,<br />
	which may be positive or negative (or zero).<br />
	The sum of all the integers, given to the cooks, is positive.</p>
<p style="text-align:justify">Suppose there are N (N ≥ 3) cooks. Cooks are labeled from 1 to N.<br />
	k's neighbors are (k-1) and (k+1), as they are standing in a circle.<br />
	Note that if k = 1, k-1 wraps around to N; and if k = N, k+1 wraps around to 1.<br />
	Let A[i] represent the integer that is kept by the cook i.<br />
	The game proceeds in turns. In each turn, any one cook may opt to play.<br />
	Now, suppose the cook k wants to play in this turn, the following changes happen, in the given order:</p>
<ul>
<li>A[k-1] = A[k-1] + A[k]</li>
<li>A[k+1] = A[k+1] + A[k]</li>
<li>A[k] = -A[k]</li>
</ul>
<p style="text-align:justify">The game would end as soon as all the numbers kept by the cooks (each A[i]) is non-negative.</p>
<p style="text-align:justify">Cooks are very impatient people!<br />
	They want to end the game as quickly as possible!<br />
	Help them determine a sequence in which they must play, such that the number of turns in which<br />
	the game finishes, is as low as possible.<br />
	For the purpose of this problem, you are to find the minimum number of turns in which the game can end!</p>
<p style="font-size:1.5em;font-weight:bold">Input format</p>
<p style="text-align:justify">The first line contains the number T, the number of test cases. In the following lines, T test cases follow (without any newlines between them.) Each test case consists of exactly two lines.<br />
The first line contains the only positive integer N, the number of cooks playing the game. The second line contains N space separated integers, the initial numbers kept by the cooks.</p>
<p style="font-size:1.5em;font-weight:bold">Output format</p>
<p style="text-align:justify">For each test case, print the minimum number of turns in which the game can end.</p>
<p style="font-size:1.5em;font-weight:bold">Constraints</p>
<p>1 ≤ T ≤ 10<br />
3 ≤ N ≤ 50000<br />
-200000 ≤ (initial numbers kept by the cooks) ≤ 200000</p>
<p style="font-size:1.5em;font-weight:bold">Sample input</p>
<pre>2
3
1 -1 2
3
4 -2 -1

</pre><p style="font-size:1.5em;font-weight:bold">Sample output</p>
<pre>1
6

</pre><p style="font-size:1.5em;font-weight:bold">Explanation</p>
<p style="text-align:justify">In the first case, cook 2 can take the first turn which converts the sequence into<br />
	(0, 1, 1) and end the game.</p>
<p style="text-align:justify">In the second case, the following sequence of moves are optimal.</p>
<ul>
<li>0. (4, -2, -1) -- initial</li>
<li>1. (3, -3, 1) -- after cook 3 moves</li>
<li>2. (0,  3, -2) -- after cook 2 moves</li>
<li>3. (-2, 1, 2) -- after cook 3 moves</li>
<li>4. (2, -1, 0) -- after cook 1 moves</li>
<li>5. (1, 1, -1) -- after cook 2 moves</li>
<li>6. (0, 0, 1) -- after cook 3 moves</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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
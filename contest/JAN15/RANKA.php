<?php require_once("../../includes/header.php"); ?><h1>Ranka</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/RANKA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/RANKA.pdf">Russian</a>.</h3>
<p>
There is an ancient legend in China called <a href="http://en.wikipedia.org/wiki/Ranka_(legend)">Ranka</a></p>
<p>
(Content taken from <a href="http://en.wikipedia.org/wiki/Ranka_(legend)">wikipedia</a>) <br />
Wang Chih was a hardy young fellow who used to venture deep into the mountains to find suitable wood for his axe.<br />
One day he went farther than usual and became lost. He wandered about for a while and eventually came upon two strange old men<br />
who were playing Go, their board resting on a rock between them. Wang Chih was fascinated. He put down his axe and began to watch.<br />
One of the players gave him something like a date to chew on, so that he felt neither hunger nor thirst. As he continued to watch he<br />
fell into a trance for what seemed like an hour or two. When he awoke, however, the two old men were no longer there.<br />
He found that his axe handle had rotted to dust and he had grown a long beard. When he returned to his native village he discovered<br />
that his family had disappeared and that no one even remembered his name.
</p>
<p>
So how could that happen? Well, that's because the game "Go" can played very long.
</p>
<p>
Let's first define the game "Go":
</p>
<p>
In this game, we focus on the game played on a 9x9 board. It is a game played by 2 players.<br />
A plays black stone while B plays white. They play alternatively. A goes first.<br />
In each cell there can be 3 states: empty, having 1 black stone and having 1 white stone.
</p>
<p>
If we link the same color stones which are neighbourhood (|x1-x2| + |y1-y2| = 1), we can get some connected component.<br />
We say a connected component is dead if no stone in it has an empty neighbourhood cell.</p>
<p>
In each move, the player must put the stone on an empty cell or pass the turn. If this player put a stone, following situation will<br />
happen. </p>
<ol>
</ol>
<li>If after this move there is at least one connected component of opponent dead, then stones from these dead components<br />
will be removed. (In this case, after remove all dead components of your opponent, we can prove all your connected component are not dead.)</li>
<li> Otherwise, if there are at least one connected component of yours dead, then this move is invalid.</li>
<p>
In order to avoid infinite loops, there is a rule called "No same state". The state of board can be expressed as a string with length 82:<br />
the first character indicate who is the next player, then 9*9 character indicate the state of a certain cell. If after one move the game<br />
goes into a state that previously occurred, then this move is invalid.<br />
</p>
<p>
You are given an integer N. Please output a match that contains N valid moves for both player.
</p>
<p>
You can find details for the rules in the judge program<br />
<a href="https://codechef_shared.s3.amazonaws.com/download/RANKA_JUDGE.cpp">here</a>.
</p>
<h3>Input</h3>
<p>Only line of input will contain an integer denoting <b>N</b>.</p>
<h3>Output</h3>
<p>You must output N lines.<br />
If the player uses "pass" at that step, then output "0 0", otherwise output the coordinate "x y" where 1 ≤ x,y ≤ 9.
</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li>Subtask1 (20 points) : <b>N  = 5000</b></li>
<li>Subtask2 (80 points) : <b>N  = 10000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
12

<b>Output:</b>
1 1
2 1
2 2
1 2
1 3
2 3
1 1
3 2
0 0
1 2
9 9
2 2
</pre><h3>Examples</h3>
<p>
Here are some examples: <br />
You can see the image at this <a href="https://codechef_shared.s3.amazonaws.com/download/JAN15/examples.png">link</a> if itis not properly visible in your browser.<br />
<br /> 
</p>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/JAN15/examples.png" width="750" />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cgy4ever">cgy4ever</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYPY, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM chicken, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>
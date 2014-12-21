<?php require("../../includes/header.php"); ?><h1>Deja Vu</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/mandarin/WSCAGAIN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/russian/WSCAGAIN.pdf">Russian</a>.</h3>
<p>The following is an easy game that the setter of this problem played when he was 8:</p>
<p><i>A boatman, a wolf, a sheep, and a cabbage are on the bank of a river. They have a small boat that is capable of carrying the boatman and at most one other animal/item with him. However, if left alone by the boatman, the wolf can eat the sheep, and the sheep can eat the cabbage. How can all four be moved safely to the opposite bank of the river?</i></p>
<p><a href="http://coolmath-games.com/Logic-wolfsheepcabbage/index.html">Here</a> is a nice visualization of the whole process in the original game. Disclaimer: writers, testers and CodeChef are not related to this link.</p>
<p>This leads to a more general problem. If there are other groups of animals/items with the boatman, <b>and if the boat is big enough to seat at most <b>K</b> animals/items other than the boatman</b>, how quickly can all of them be moved to the opposite bank of the river in such a way that nobody/nothing gets eaten?</p>
<p>We will give you the number of animals/items (not including the boatman). We will also give you the new capacity of the boat. Moreover, we will give you all a list of pairs of the form "<b>X Y</b>" where the <b>X</b>-th animal/item will be eaten by the <b>Y</b>-th one if they are both on the opposite bank to the boatman.</p>
<p>Assuming a valid solution exists, you are to determine the <b>minimum number of boat trips</b> across the river to achieve the task.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test contains three space separated integers <b>N</b>, <b>M</b> and <b>K</b> - the number of animals/items not including the boatman, the number of relations of the form "<b>X</b> will be eaten by <b>Y</b>", and the capacity of the boat (not including the boatman), respectively.</p>
<p>The following <b>M</b> lines contain pairs of the form <b>X Y</b> with the meaning that the <b>X</b>-th animal/item will be eaten by the <b>Y</b>-th one if they are both on the opposite bank to the boatman.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a single integer - the minimum number of boat trips across the river necessary. In the test cases it is always possible to accomplish this goal.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>Subtask 1: <b>1</b> ≤ <b>N</b> ≤ <b>3</b>,  <b>0</b> ≤ <b>M</b> ≤ <b>3</b> - 22 points.</li>
<li>Subtask 2: <b>1</b> ≤ <b>N</b> ≤ <b>6</b>,  <b>0</b> ≤ <b>M</b> ≤ <b>15</b> - 34 points.</li>
<li>Subtask 3: <b>1</b> ≤ <b>N</b> ≤ <b>13</b>,  <b>0</b> ≤ <b>M</b> ≤ <b>78</b> - 44 points.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 2 1
1 2
2 3
3 3 2
1 2
1 3
2 3

<b>Output:</b>
7
3
</pre>
<h3>Explanation</h3>
<p>The first example is the original version of the problem.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-08-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>
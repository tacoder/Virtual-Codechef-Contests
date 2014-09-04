<?php require("../../includes/header.php"); ?><h1>Multi-Peg Tower of Hanoi</h1><div class="content">
<p>Tower of Hanoi problem is a classical recurrence problem that is often used to teach recurrence relations to computer science students. In the classical 3-Peg Tower of Hanoi problem initially the peg A contains all disks top to bottom in a strictly small to big order. This tower of disks is to be moved to peg C using peg B as intermediate. The rule of the game is that in every move the top disk from one of the towers can be moved to the top of another tower. Never ever can we put a large disk on top of a smaller one. In this problem, in order to move a tower of <b>n</b> disks, we must shift the top sub-tower of <b>n</b> - 1 disks to the only intermediate peg, then shift the largest to peg C and then the sub-tower of size <b>n</b> - 1 from intermediate to destination peg. Whatever the value of <b>n</b> may be exactly <b>n</b> - 1 disks have to be shifted to the only intermediate peg. We have no choice of fewer or more disks, and no choice for the intermediate peg. </p>
<p>In multi-Peg Tower of Hanoi problem we have <b>p</b> &gt;= 3 pegs (<b>P<sub>1</sub>, P<sub>2</sub>, ..., P<sub>p</sub></b>) and <b>n</b> disks to move from <b>P<sub>1</sub></b> to <b>P<sub>p</sub></b> using minimum number of moves. We refer to this as (<b>n, p</b>) system. Now we have <b>p</b> - 2 intermediate pegs and not all of <b>n</b> - 1 disks need to be shifted to one intermediate peg. However, before the largest disk moves to the destination peg, all top <b>n</b> - 1 disks have to be distributed among all intermediate pegs. While the optimal strategy still baffles algorithm designers, many believe that in the optimal solution, certain optimal number n1 disks have to be shifted to an intermediate peg. Then the remaining <b>n - n<sub>1</sub></b> disks must reach destination, while the disks in the intermediate peg will remain untouched. Then the disks in the intermediate peg must reach destination. In transferring any sub-tower to any peg, this strategy will be followed recursively. Let <b>M(n, p)</b> be the minimum number of moves required to shift a tower of n disks in p peg system. This strategy satisfies the following recurrence relations: <b>M(n,p) = min(2M(n<sub>1</sub>,p)+M(n-n<sub>1</sub>,p-1))</b> for all 0 &lt; <b>n<sub>1</sub></b> &lt; <b>n</b>.
</p>
<p>
Assume further that, if multiple strategies result in minimum number of moves, then the strategy for which <b>n<sub>1</sub></b> is the smallest is chosen. Your job is to find out the move number at which a particular disk <b>D</b> moves ultimately to the destination peg in an <b>(n, p)</b> system.
</p>
<h3>Input</h3>
<p>The first line of input will be an integer <b>T</b>, denoting the number of test cases. Each test case is represented by a triple of integers <b>N</b>, <b>P</b> and <b>K</b> in the same line separated by space. <b>N</b> denotes the number of disks. <b>P</b> denotes the number of pegs. <b>K</b> denotes the index (1-based from the top) of the disk, whose move number need to be found out.</p>
<h3>Output</h3>
<p>For each test case, there should be a single line of output. The line should contain “Case : ”, followed by an integer representing the move number at which disk <b>K</b> moves ultimately to the destination peg. Refer to the sample input and output for exact formatting.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 10000</p>
<p>1 &lt;= <b>N</b> &lt;= 50</p>
<p>3 &lt;= <b>P</b> &lt;= 50
</p><p>1 &lt;= <b>K</b> &lt;= <b>N</b><br />
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3 2
50 3 1
50 50 1

<b>Output:</b>
Case 1: 6
Case 2: 1125899906842623
Case 3: 101

</pre></p>
<p><b>
<p>Problem Setter : Dr. M. Kaykobad</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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
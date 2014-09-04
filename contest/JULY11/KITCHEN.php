<?php require("../../includes/header.php"); ?><h1>Large Kitchen</h1><div class="content">

<p>There is a large kitchen in one of the largest Chef's restaurants. Well, to be honest, that's not a real kitchen yet, since there's nothing in it. The first thing to do now is to place cookers, ovens, tables and other stuff. You are to help Chef in this issue.</p>
<p>The kitchen-to-be can be imagined as a rectangular grid with N rows and M columns consisting of N*M equal cells which are currently empty. As unlikely as it may seem, each piece of the aforementioned stuff takes exactly one cell of the grid. Chef would like to use as many cells as possible for the stuff, but there's just one restriction: there should be no "closed" areas at the kitchen -- areas which can't be reached without moving anything, otherwise it would be too hard for chefs to pick up, for example, a fallen knife. In other words, there should exist <b>no</b> sequences of used cells X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>K</sub>, K &gt; 2, such that for every i between 1 and K-1, inclusive, cells X<sub>i</sub> and X<sub>i+1</sub> are neighbouring, cells X<sub>1</sub> and X<sub>K</sub> are neighbouring too, and no cell is repeated twice. Two cells are called neighbouring if they share a common side.</p>
<p>Yet there is another strange restriction. The set of used cells must be <i>connected</i>, that is, for every pair of used cells there should exist a sequence of used cells X<sub>1</sub>, X<sub>2</sub>, ..., X<sub>K</sub> such that X<sub>1</sub> is one of these cells, X<sub>K</sub> is another one, and for every i between 1 and K-1, inclusive, cells X<sub>i</sub> and X<sub>i+1</sub> are neighbouring. </p>
<p>Your task is to use as many cells as possible under these restrictions. Note that this is a challenge problem: you don't have to find the optimal solution, it's enough to find any of them (but the better is your solution, the more points you receive).</p>
<h3>Input</h3>

<p>Input will begin with an integer T, the number of test cases (no more than 30). Each test case consists of 2 integers N and M (N, M ≤ 100), which denote the dimensions of the kitchen.</p>
<h3>Output</h3>

<p>For each test case output exactly N lines containing exactly M characters each, describing the final state of the kitchen. A '#' character should represent a cell which can be used for placing something, and a '.' character should represent a cell which should remain free. You may separate the answers for consecutive test cases with empty lines.</p>
<h3>Scoring</h3>

<p>Your score for each test case is one hundred times the total number of used cells in your output divided by the total number of cells (in fact, this number indicates the percentage of used cells in your solution). Your score for each file is the average of your scores on the individual test cases. Your overall score is the average of your scores on the individual test files. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 4
5 8

<b>Output:</b>
<code>
.###
##.#
#.##
##.#

#.#.#.#.
###.####
.#.#.#.#
##.###..
.###.###
</code>
</pre><p>
The score for the first test case is 100*12/16 = 75. The score for the second test case is 100*26/40 = 65. The overall score is thus (75+65)/2 = 70. Note that the solution to the first test case is optimal (there is no correct output with a larger number of used cells), but in the second test case there exist several solutions with more than 26 used cells. </p>
<h3>Test Case Generation</h3>

<p>Every official input file contains exactly 30 test cases. In every test case M and N are chosen randomly and uniformly between 10 and 100, inclusive.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-06-2011</td>
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
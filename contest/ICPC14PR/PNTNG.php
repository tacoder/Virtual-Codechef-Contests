<?php require("../../includes/header.php"); ?><h1>Painting</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/PNTNG.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/PNTNG.pdf">Russian</a> as well.</h3>
<p>You are given a transparent three-dimensional table, the height equals to <b>H</b> and the base is a two-dimensional table <b>N∙M</b>.</p>
<p>The layers of the 3D table are numbered from 1 to <b>H</b>. Each layer is a two-dimensional table, the rows are numbered from 1 to <b>N</b> and the columns are numbered from 1 to <b>M</b>. A pair <b>(i, j)</b> (1 ≤ <b>i</b> ≤ <b>N</b>, 1 ≤ <b>j</b> ≤ <b>M</b>) corresponds to the cell at the intersection of <b>i</b>'th row and <b>j</b>'th column of a two-dimensional table.</p>
<p>We can paint cells of the three-dimensional table, but not more than <b>T<sub>k</sub></b> cells on <b>k</b>'th layer can be painted. Painting of one cell on <b>k</b>'th layer costs <b>C<sub>k</sub></b>. Your task is to find the minimum cost of painting the table thus that it can't be seen throught from the top (there is no cell which is unpainted on every layer). Formally you need to find a painting, that for any pair <b>(i, j)</b> (1 ≤ <b>i</b> ≤ <b>N</b>, 1 ≤ <b>j</b> ≤ <b>M</b>) there is a layer <b>k</b> (1 ≤ <b>k</b> ≤ <b>H</b>), where cell <b>(i, j)</b> is painted. If there is no such a painting then the answer is "Impossible". </p>
<h3>Input</h3>
<p>The first line contains three integers <b>N</b>, <b>M</b> and <b>H</b>.</p>
<p>Each of the next <b>H</b> lines contains two integers <b>T<sub>k</sub></b> and <b>C<sub>k</sub></b>.</p>
<h3>Output</h3>
<p>The output should contain the minimum cost of the painting if there is one, otherwise output Impossible without quotes.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N∙M</b> ≤ 10<sup>12</sup>;</p>
<p>1 ≤ <b>H</b> ≤ 100000;</p>
<p>0 ≤ <b>T<sub>k</sub></b> ≤ 10<sup>12</sup>, for each layer;</p>
<p>0 ≤ <b>C<sub>k</sub></b> ≤ 10<sup>5</sup>, for each layer.</p>
<h3>Example 1</h3>
<pre><b>Input:</b>
3 4 2
6 1
6 2

<b>Output:</b>
18
</pre><h3>Example 2</h3>
<pre><b>Input:</b>
2 2 3
1 1
1 2
1 3

<b>Output:</b>
Impossible
</pre><h3>Explanations</h3>
<p>
In the first example, we should paint 6 cells on the first layer and 6 cells on the second layer.<br /><br />
In the second example, there are not enough cells to paint the table properly.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rustinpiece">rustinpiece</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-05-2014</td>
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
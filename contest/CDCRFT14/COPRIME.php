<?php require("../../includes/header.php"); ?><h1>Coprime Pairs</h1><div class="content">
<p>
  Mr. Yagami is playing a game of arrays. He is given two random arrays <b>A</b> and <b>B</b><br />
  consisting of <b>N</b> positive integer elements. Game starts by Mr. Yagami assigning <b>0 or 1</b><br />
  to each element in <b>A and B</b>.</p>
<p>After this assignment is done, a graph is constructed with a node for each<br />
  element in the array A and B (<b>2N</b> nodes) and no edges. The game proceeds with a<br />
  valid move being defined in the following way:</p>
<ul>
<li>
<p>  One of the arrays from <b>A</b> or <b>B</b> is selected.<br />
  From the selected array, an element which has been marked <b>0</b> is chosen. Let us<br />
  call this element as <b>X</b>.</p>
</li>
<li>
<p>A set of elements, <b>Y</b>, are chosen from the array, which was not chosen in the<br />
  first step, such that all elements of <b>Y</b> should be marked as <b>1</b> and all elements<br />
  of <b>Y</b> should be greater than <b>X</b> and no element of<b> Y</b> should be coprime to <b>X</b>.</p>
</li>
<li>
<p>Finally an edge is drawn from the node labelled <b>X</b> to all the nodes<br />
  corresponding to the elements in set <b>Y</b>. There can only be a single edge<br />
  between any <b>2</b> nodes in the graph.</p>
</li>
</ul>
<p>  He can make as many valid moves. Mr. Yagami receives <b>1</b> point for each edge<br />
  that is drawn in the graph.</p>
<p>  Mr. Yagami is very clever, so he makes the initial assignment in such a way<br />
  that it maximizes the number of points he receives in the game. You have to<br />
  return the maximum number of points that Mr. Yagami can receive.
  </p>
<h3>Input Format:</h3>
<p>
  The first line of the input contains a single integer, <b>N (1 ≤ N ≤<br />
  40)</b><br />
  The second line of input contains <b>N</b> integers separated by a single space<br />
  character, which represent the elements of the array <b>A. (2 ≤ A[i] &le;  10^9)</b><br />
  Similarly, the last line of input also contains <b>N</b> integers separated by a<br />
  single space character, which represent the elements of the array <b>B. (2 ≤<br />
  B[i] ≤ 10^9)</b>
  </p>
<h3>Output Format:</h3>
<p>
  A single integer representing the maximum score which Mr. Yagami can receive.
  </p>
<h3>Sample Input:</h3>
<pre>
4
16 3 2 9
12 18 13 4</pre><h3>Sample Output:</h3>
<pre>
8</pre><h3>Explanation:</h3>
<p>
  He picks 2 from first array. So he gets to put 3 edges ie. 2-&gt;4, 2-&gt;12,<br />
  2-&gt;18.<br />	<br />
  Next he picks 3 from the first array. So he gets to put 2 edges ie. 3-&gt;12,<br />
  3-&gt;18.<br />
  Next he picks 9 from the first array. So he gets to put 2 edges ie. 9-&gt;12,<br />
  9-&gt;18.<br />
  Next he picks 16 from the first array. So he gets to put 1 edge ie. 16-&gt;18.<br />
  Total edges=8.
  </p>
<p><br />
<b>Problem Setter: Lalit Kundu</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2014</td>
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
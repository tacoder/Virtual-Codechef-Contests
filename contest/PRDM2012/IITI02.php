<?php require("../../includes/header.php"); ?><h1>Interesting Martian Trips</h1><div class="content">

<p><i> Freakin' news has recently claimed that they have discovered a civilization on mars and that they have established contact with the martians. Following is a summary of the lunch hour breakin' news on freakin' news :</i></p>
<p> The martian civilization is arranged on an m*n grid (m rows, n columns). The rows are numbered from 1,2,...m (from top to bottom) and the columns are numbered from 1,2,...n (from left to right). The cell in the ith row and jth column is labelled (i,j) has height H[i][j].</p>
<p> The queen wants to take a trip along the civilization. A trip is a finite sequence of cells c[1]=(i[1],j[1]), c[2]=(i[2],j[2]), ... c[k]=(i[k],j[k]) satifying the following properties : <br /></p>
<pre>A] The trip must start at cell (1,1) :
	i[1]=1, j[1]=1.  </pre><p>B] Consecutive cells on the trip must be adjacent : <br /></p>
<pre>	|i[c+1]-i[c]| + |j[c+1]-j[c]| = 1 for all c s.t. 1&lt;=c&lt;=(k-1).  </pre><p>C] Every move on the trip must either be to the right to to the bottom : <br /></p>
<pre>	i[c+1]>i[c] or j[c+1]>j[c] for all c s.t. 1&lt;=c&lt;=(k-1). </pre><p> <br /></p>
<p> The queen thinks that the trip is interesting if and only if : <br /></p>
<pre>D] Every pair of consecutive cells have different heights :
	H[ i[c] ][ j[c] ] != H[ i[c+1] ][ j[c+1] ] for all c s.t. 1&lt;=c&lt;=(k-1)  </pre><p>E] The heights of the cells in the trip alternate i.e. : <br /></p>
<pre>	( H[ i[c+2] ][ j[c+2] ] - H[ i[c+1] ][ j[c+1] ] ) ( H[ i[c+1] ][ j[c+1] ] - H[ i[c] ][ j[c] ] ) &lt; 0 for all c s.t. 1&lt;=c&lt;=(k-2) </pre><p> <br /></p>
<p>(Note : All trips with only 2 cells (k=2)  are assumed to satisfy criteria E.) <br /><br />
(Note : All trips with only 1 cell (k=1) are assumed to satisfy criteria B,C,D,E. ) <br /><br />
(Note : The trip can end at any cell.) <br /></p>
<p> Finally, among the various interesting trips the queen prefers those with maximum possible sum of heights. <br /><br />
i.e. ( H[ i[1] ][ j[1] ] + H[ i[2] ][ j[2] ] + ... H[ i[k] ][ j[k] ] ) should be maximum.</p>
<p> The queen has asked freakin' news to find the maximum possible sum of heights for an interesting trip. <i>Your job is to do this task for freakin' news.</i></p>
<h3>Input</h3>
<p>The first line of input contains the two integers m,n. The next m lines each consist of n space seperated integers. The jth integer in the ith of these lines is H[i][j]. </p>
<h3>Output</h3>
<p>On the only line of output, output a single integer : the maximum sum of heights for an interesting trip.</p>
<h3>Constraints</h3>
<p>1&lt;=m,n&lt;=800 <br /><br />
0&lt;=H[i][j]&lt;=1000000000 <br /></p>
<p><b> (Note : This problem might require the use of 64-bit integers.)</b></p>
<h3>Sample Input 1</h3>
<p>2 2 <br /><br />
5 2 <br /><br />
4 3 <br /></p>
<h3>Sample Output 1</h3>
<p>10 <br /></p>
<h3>Sample Input 2</h3>
<p>3 2 <br /><br />
2 2 <br /><br />
1 3 <br /><br />
1 1 <br /></p>
<h3>Sample Output 2</h3>
<p>7 <br /></p>
<h3>Explanation</h3>
<p>1 : The output corresponds to the path (1,1), (1,2), (2,2). <br /><br />
2 : The output corresponds to the path (1,1), (2,1), (2,2), (3,2). <br /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/architk">architk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-03-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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
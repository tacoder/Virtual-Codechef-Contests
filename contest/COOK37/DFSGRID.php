<?php require("../../includes/header.php"); ?><h1>Chef and The Recursive Algorithm</h1><div class="content">
<p>There is a <b>RxC</b> grid where the rows are numbered by integers from <b>1</b> to <b>R</b> from top to bottom and columns are numbered by integers from <b>1</b> to <b>C</b> from left to right. Two cells of the grid are called adjacent if they share a common side.<br />
<br /><br /><br />
Chef uses an algorithm which starts at a cell <b>(sr,sc)</b> of the grid and visits the unvisited adjacent cells inside the grid recursively. The order in which the adjacent cells are looked for are: right, down, left and up. Your job is to find out the number of different cells that would be visited when the cell <b>(tr,tc)</b> is found. Given below is the pseudocode of the algorithm:</p>
<p><pre><code>
// A 2D boolean array to mark the visited cells
Let seen[1...R][1...C] be a 2D array initialized to false

// The visit counter to count the number of visited cells so far
visitcount = 0 

// This function visits the unvisited cells of the grid recursively
// R,C are the number of rows and columns of the grid
// r,c are the row and column number of the current cell 
// tr,tc are the row and column number of the target cell 
VISIT(R, C, r, c, tr, tc)
     // Increment the counter for number of visited cells
     visitcount = visitcount + 1 
  
     // Marks the cell at r,c as visited
     seen[r][c]=true           
  
     // Prints the value of visitcount when the cell(tr,tc) is found
     if r==tr and c==tc  
	    PRINT visitcount

     // Check for an unvisited cell inside grid at right
     if c+1 ≤ C and seen[r][c+1] == false 
	    VISIT(R,C,r,c+1,tr,tc)
    
     // Check for an unvisited cell inside grid at down
     if r+1 ≤ R and seen[r+1][c] == false 
	     VISIT(R,C,r+1,c,tr,tc)
  
     // Check for an unvisited cell inside grid at left
     if c-1 ≥ 1 and seen[r][c-1] == false 
	     VISIT(R,C,r,c-1,tr,tc)
  
     // Check for an unvisited cell inside grid at up
     if r-1 ≥ 1 and seen[r-1][c] == false 
	     VISIT(R,C,r-1,c,tr,tc)

</code></pre></p><p></p>

<p> The above algorithm is both time and memory inefficient. Your task is to produce the same output but more efficiently. That is to print the value of <code>visitcount</code> when the cell <b>(tr,tc)</b> is found, if the above algorithm is called with <code>VISIT(R,C,sr,sc,tr,tc)</code>. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each of the following <b>T</b> lines contain six separated integers <b>R, C, sr, sc, tr and tc.</b></p>
<h3>Output</h3>
<p> For each case output the number that would be produced by the algorithm given.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200000 (2*10<sup>5</sup> )</b></li>
<li><b>1</b> ≤ <b>R,C</b> ≤ <b>1000000000 (10<sup>9</sup> )</b></li>
<li><b>1</b> ≤ <b>sr,tr</b> ≤ <b>R</b></li>
<li><b>1</b> ≤ <b>sc,tc</b> ≤ <b>C</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
4 4 3 2 3 4
4 4 3 2 4 4
4 4 3 2 2 3
2 3 1 1 1 3  
2 3 1 1 1 1 

<b>Output:</b>
3
4
11
3
1
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-08-2013</td>
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
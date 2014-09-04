<?php require("../../includes/header.php"); ?><h1>Defuse the bombs!</h1><div class="content">
<p>Sherlock and Watson, tired of solving mysteries all day, take the subways of London to get back to Baker Street. Just to ruin their free time, Moriarty has rigged the entire subway with highly powerful bombs. The bombs are planted both on the tracks as well as the stations. It is up to Sherlock and Watson to save the city, again.</p>
<p>Sherlock knows the complete map of London’s subway system – which can be simply drawn as a 2D grid where each cell represents a region in London. Using “his eyes and ears all over the city” – the Homeless Network, Sherlock has found the places where the bombs are planted and the type of bombs planted. In order to maximize the efficiency of defusing the bombs, Sherlock and Watson plan on starting at 2 different corners of the map. Watson suggested that they should start at the diagonally opposite corners of the map. However Sherlock felt that it is too mainstream and wants to start at two adjacent corners of the map – Sherlock from the top-left corner and Watson from the bottom-left corner.</p>
<p>Once they’ve started, Sherlock can move to the cell to the right of his current cell or to the cell below. Similarly, Watson can move to the cell to his right or the cell above. Ultimately, through a sequence of bomb defusal, they will end up in a cell that is diagonally opposite to their start cell, i.e. Sherlock should reach the bottom-right corner and Watson should reach the top-right corner. Clearly, Sherlock and Watson have to cross each other’s paths before reaching their destination cells. The bombs can be defused only once in such cases.</p>
<p>Every cell in the map can be in one of the following 3 states –</p>
<p><span> </span>i.    The region is blocked. It is denoted by <strong>-1</strong> on the map.</p>
<p><span> </span>ii.   The region is a track rigged with a bomb.</p>
<p><span> </span>iii.  The region is a station rigged with a bomb.</p>
<p>Obviously, Sherlock and Watson cannot traverse through the blocked regions. Since they are experts in defusing a bomb, they can do it zero units of time. Every non-blocked region has an associated cost – the cost to defuse the bomb in that cell. For any cell they visit, they will always defuse the bomb in that cell. Their main objective is to minimize the total cost of defusing the bombs. However, being the good guys, they do not want the people at the stations to lose their lives, so they have to defuse the bombs at all the stations.</p>
<p>Can you help him calculate the minimum cost that they have to spend, without leaving any station to explode?</p>
<p><strong>Input Description:</strong></p>
<p>The first line of the input has a single integer <strong>T</strong>, denoting the number of test cases. Each test case begins with 2 integers <strong>N</strong> and <strong>M</strong> denoting the number of rows and columns in the map. N lines follow, each having M values that can be an integer, denoting the cost of defusing the bomb in that region or -1 if the region is blocked.</p>
<p>In the next line an integer <strong>K</strong> is given, denoting the number of stations in London’s subway. The next K lines have 2 integers <strong>X</strong> and <strong>Y</strong>, meaning that the cell at row X (1 indexed) and column Y (1 indexed) in the grid is a station</p>
<p><strong>Output Description:</strong></p>
<p>For each test case, print a single integer denoting the minimum cost that has to be spent, without leaving any station to explode. If there isn’t any route in which the bombs are defused at all the stations or if Sherlock and Watson can’t reach their corresponding destinations, print -1.</p>
<p><strong>Constraints:</strong></p>
<p>1 &lt;= <strong>T</strong> &lt;= 10</p>
<p>3 &lt;= <strong>N,M</strong> &lt;= 1000</p>
<p>-1 &lt;= <strong>grid[i][j]</strong> &lt;= 1000</p>
<p>1 &lt;= <strong>K</strong> &lt;= 100</p>
<p>1 &lt;= <strong>X</strong> &lt;= <strong>N</strong></p>
<p>1 &lt;= <strong>Y</strong> &lt;= <strong>M</strong></p>
<p><strong>Sample Test Case:</strong></p>
<p><strong>Input:</strong></p>
<p>1</p>
<p>3 3</p>
<p>1 2 3</p>
<p>4 -1 6</p>
<p>7 8 9</p>
<p>1</p>
<p>1 2</p>
<p><strong>Output:</strong></p>
<p>32</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 4 sec</td>
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
<?php require("../../includes/header.php"); ?><h1>Forces in the crystal</h1><div class="content">

<p>Suppose that we have a crystalline triangular grid of atoms. Atoms are arranged on a regular grid, and each atom has six neighbors (unless it lies on the boundary of crystal). Each atom has an electric charge of q, and can be polarized in only one of two directions: up or down (the laws of physics in Byteland are somewhat surprising!). If two atoms are neighbors and share the same polarization, then a destructive force against the crystal occurs, whose value is equal to q<sub>1</sub>*q<sub>2</sub>. We can choose the polarization for each atom, and we would like to minimize total force working against the crystal, i.e., the sum of values of all the individual forces.</p>
<h3>Input</h3>
<p>First, 1000≤n≤2000, the size of input. Then n lines with n numbers in each follow. In the x-th line, 1≤x≤n, the y-th number, 1≤y≤n, is the charge of the atom with coordinates in the crystal equal to (x,y) if x is odd, (x,y+1/2) otherwise. For any atom at coordinates (x,y), the coordinates of the neighbors are assumed to be the following (as long as they appear in the crystal): (x-1,y-1/2),(x-1,y+1/2),(x,y-1),(x,y+1),(x+1,y-1/2),(x+1,y+1/2). Each charge q is in the range 0.1≤q≤1.</p>
<h3>Output</h3>
<p>For each atom given at input, output <em>0</em> or <em>1</em> depending on whether the polarization of the atom should be directed up or down.</p>
<h3>Score</h3>
<p>The score of your program is equal to the value of the force acting on the crystal. The program is tested multiple times for different data sets, and the results are averaged.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3
1 2 3
4 5 6
7 8 9

<strong>Output:</strong>
0 0 0
0 0 0
0 0 1

<strong>Score:</strong>
269 = (1*2+1*4+2*3+2*5+2*4+3*6+3*5+4*5+4*7+4*8+5*6+5*8+7*8)
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-09-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 - 15 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
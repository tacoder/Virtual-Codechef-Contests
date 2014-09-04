<?php require("../../includes/header.php"); ?><h1>Crossword</h1><div class="content">

<p>Crossword is a popular puzzle known to everybody. </p>
<p>Consider a crossword in the form of a square grid of black and white squares. The white squares are filled with letters, forming the solution words, which appear either across: from left to right or down: from top to bottom. Two solution words can share a letter if one is across while the other is down. The black squares separate the solution words.</p>
<p>Given the set of solution words of an n x n crossword and the list of strings of letters that appear row-wise, the program should find the location of all black squares. While considering strings, black squares in a row are ignored. Assume that at least one black square is present in the crossword.</p>
<p>The location of a square in the crossword is identified by two integers: the row number and the column number. Rows/columns are numbered 1, 2,..., n; rows are from top to bottom while columns are from left to right.</p>
<p>For example, consider the solution of a 4x4 crossword given below, where a square containing the symbol # is assumed to be a black square.</p>
<style type="text/css">
#crossword-border td
{
   border: 1px solid #000;
}

</style><table id="crossword-border" border=1>
<tr>
<td>#</td>
<td>n</td>
<td>i</td>
<td>b</td>
</tr>
<tr>
<td>s</td>
<td>o</td>
<td>#</td>
<td>i</td>
</tr>
<tr>
<td>a</td>
<td>#</td>
<td>#</td>
<td>t</td>
</tr>
<tr>
<td>d</td>
<td>o</td>
<td>n</td>
<td>#</td>
</tr>
</table>
<p><br /></p>
<p>Given the set of solution words: {sad, no, bit, nib, so, don} and the list of strings of letters: (nib, soi, at, don) that appear row-wise in the crossword, the program should find the locations (1, 1), (2, 3), (3, 2), (3, 3) and (4, 4) of the black squares in row major order.</p>
<h3>Input</h3>
<p>The input may contain multiple test cases. For each test case there are three input lines.<br />
The first input line gives the value of n. The 2nd line contains all solution words in an arbitrary order. The 3rd line gives n strings of letters. The letters in the rth string appear from left to right in the rth row of the crossword, r= 1, 2,..., n; the black squares in a row are totally ignored.<br />
Words / strings in input are separated by space.<br />
The input terminates with an input 0 for n.</p>
<h3>Output</h3>
<p>For each test case, there is only one output line.<br />
The line contains locations of all black squares in row-major order. Each location is identified by the row number and the column number, as shown in the sample output.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
so sad bit don no nib
nib soi at don
4
so sad bit don in it no nib
sad noo iin bit
5
eye begin india send so boat 
bso eyeb gno india nt

<b>Output:</b>
1 1 2 3 3 2 3 3 4 4
1 1 2 3 3 2 4 4
1 2 1 5 2 4 3 2 3 4 5 2 5 3 5 4

</pre>    </div><table id="crossword-border" border=1>
<tr>
<td>#</td>
<td>n</td>
<td>i</td>
<td>b</td>
</tr>
<tr>
<td>s</td>
<td>o</td>
<td>#</td>
<td>i</td>
</tr>
<tr>
<td>a</td>
<td>#</td>
<td>#</td>
<td>t</td>
</tr>
<tr>
<td>d</td>
<td>o</td>
<td>n</td>
<td>#</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
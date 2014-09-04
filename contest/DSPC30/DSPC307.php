<?php require("../../includes/header.php"); ?><h1>SAFE MOVES</h1><div class="content">

<p class="MsoNormal" align="center"><b><u><span>Safe<br />
Moves</span></u></b></p>
<p class="MsoNormal"><span>Everyone<br />
has played a standard chess. Ram and sham play a modified version of chess<br />
where the field is not <span class="GramE">8x8</span> but an <span class="SpellE">NxN</span>.<br />
There is one king, N Knights and N-1 queens. At a particular move Ram wishes to<br />
know the total number of possible safe moves he can do.</span></p>
<p class="MsoNormal"><span>A safe<br />
move is defined as a move where, the new place of move is either not under an<br />
attack of opponent’s pieces or if both players attack the same place will lead<br />
to less(not equal) loss of Ram as compared to Sham.</span></p>
<p class="MsoNormal"><span>The loss<br />
is defined as</span></p>
<p class="MsoNormal"><span>Knight-<br />
1 point</span></p>
<p class="MsoNormal"><span>Queen- 2<br />
point</span></p>
<p class="MsoNormal"><span>King<br />
should not be attacked.</span></p>
<p class="MsoNormal"><span>Note:<br />
Attack on opponent’s king is not a safe move.</span></p>
<p class="MsoNormal"><span>All<br />
other rules of general chess are followed.</span></p>
<p class="MsoNormal"><span>©<span class="SpellE">Shahzor</span> Khan</span></p>
<p class="MsoNormal"><span><span> </span></span></p>
<p class="MsoNormal"><span>&nbsp;</span></p>
<p class="MsoNormal"><u><span>Input:</span></u></p>
<p class="MsoNormal"><span class="SpellE"><span>Inpu</span></span><span> may contain multiple test cases.</span></p>
<p class="MsoNormal"><span>First<br />
line contain the Size of field N, Assume N to be below 13</span></p>
<p class="MsoNormal"><span>Second<br />
line contain number of knights <span class="GramE">n(</span>&lt;=N) and number of<br />
Queens m(&lt;=N-1) separated by a space</span></p>
<p class="MsoNormal"><span>Next n<br />
lines will contain 2 integers each, <span class="SpellE">x<span class="GramE">,y</span></span><br />
i.e. location of knights</span></p>
<p class="MsoNormal"><span>Next m<br />
lines will contain 2 integers each <span class="SpellE">x<span class="GramE">,y</span></span><br />
i.e. location of Queens</span></p>
<p class="MsoNormal"><span>In last<br />
line will be the location of king <span class="SpellE">x<span class="GramE">,y</span></span>.</span></p>
<p class="MsoNormal"><span>Similarly<br />
are for the opponents pieces.</span></p>
<p class="MsoNormal"><span>&nbsp;</span></p>
<p class="MsoNormal"><u><span>Output:</span></u></p>
<p class="MsoNormal"><span class="GramE"><span>Single line containing number of safe moves.</span></span><span> Print<br />
NONE if no such move exists.</span></p>
<p class="MsoNormal"><span>&nbsp;</span></p>
<p class="MsoNormal"><span>&nbsp;</span></p>
<p class="MsoNormal"><u><span>Sample<br />
Input:</span></u></p>
<p class="MsoNormal"><span>4</span></p>
<p class="MsoNormal"><span>1 1</span></p>
<p class="MsoNormal"><span>2<span class="GramE">,1</span></span></p>
<p class="MsoNormal"><span>2<span class="GramE">,2</span></span></p>
<p class="MsoNormal"><span>4<span class="GramE">,1</span></span></p>
<p class="MsoNormal"><span>2 1</span></p>
<p class="MsoNormal"><span>2<span class="GramE">,3</span></span></p>
<p class="MsoNormal"><span>3<span class="GramE">,4</span></span></p>
<p class="MsoNormal"><span>2<span class="GramE">,4</span></span></p>
<p class="MsoNormal"><span>1<span class="GramE">,4</span></span></p>
<p class="MsoNormal"><span>3</span></p>
<p class="MsoNormal"><span>0 0</span></p>
<p class="MsoNormal"><span>3<span class="GramE">,1</span></span></p>
<p class="MsoNormal"><span>2 0</span></p>
<p class="MsoNormal"><span>1<span class="GramE">,1</span></span></p>
<p class="MsoNormal"><span>3<span class="GramE">,3</span></span></p>
<p class="MsoNormal"><span>1<span class="GramE">,3</span></span></p>
<p class="MsoNormal"><span>&nbsp;</span></p>
<p class="MsoNormal"><u><span>Sample<br />
Output:</span></u></p>
<p class="MsoNormal"><span>4</span></p>
<p class="MsoNormal"><span>NONE</span></p>
<p class="MsoNormal"><span>&nbsp;</span></p>
<p class="MsoNormal"><b><span>Explanation of output 1</span></b></p>
<p class="MsoNormal"><span>King can<br />
move only to 3<span class="GramE">,2</span></span></p>
<p class="MsoNormal"><span>Knight<br />
can move 3<span class="GramE">,3</span><span><br />
</span>loss-&gt;1 opponent loss-&gt;2</span></p>
<p class="MsoNormal"><span>Queen<br />
can move 1<span class="GramE">,2</span> , 3,1</span></p>
<p class="MsoNormal">&nbsp;</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>
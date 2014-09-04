<?php require("../../includes/header.php"); ?><h1>DOUBLE VISION</h1><div class="content">

<p class="MsoNormal"><span>The <span class="SpellE">DoubleVision</span><br />
<span class="GramE">company</span> designs inks and fonts that can be easily read<br />
by both humans and machines. They design their fonts on a rectangular grid. Shown<br />
below is a very simple 5x3 design for the first five digits.</span></p>
<p class="MsoNormal"><span>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">oo</span></span>.</span></p>
<p><span class="SpellE"><span class="GramE">oo</span></span>. <span class="SpellE">o.o</span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.<span class="GramE">o.</span> ..<span class="GramE">o ..o</span> <span class="SpellE">o.o</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span></span></p>
<p>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">oo</span></span>.<br />
<span class="SpellE"><span class="GramE">ooo</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o. o<span class="GramE">..</span> ..<span class="GramE">o ..o</span></span></p>
<p class="MsoNormal"><span>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">ooo</span></span><br />
<span class="SpellE">oo</span>. ..<span class="GramE">o</span></span></p>
<p class="MsoNormal"><span>The ink appears to be normal black<br />
ink, but just underneath the surface <span class="SpellE">DoubleVision</span><br />
adds a special polymer that can be detected by an infrared scanner. A human<br />
sees the black ink but not the polymer, and a machine sees the polymer but not<br />
the black ink. The only problem is that the polymer is much more expensive than<br />
the ink, so <span class="SpellE">DoubleVision</span> wants to use as little of it<br />
as possible. They have discovered that with many fonts, each symbol can be<br />
uniquely identified by at most two pixels. By only adding the polymer to one or<br />
two pixels per symbol, they drastically lower costs while still ensuring 100%<br />
accuracy in their scanners. The font shown above has this property; pixels that<br />
uniquely identify each letter are highlighted with '</span><span>#</span><span>'.<br />
(There are other choices that would work as well.)</span></p>
<p class="MsoNormal"><span>.#.<br />
<span class="GramE">.o. #o. <span class="SpellE">oo</span>.</span> <span class="GramE">o</span>.#</span></p>
<p class="MsoNormal"><span>#.<span class="GramE">o .#</span>. ..<span class="GramE">o ..o</span> <span class="SpellE">o.o</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o<span class="GramE">. .</span>o. #o. <span class="SpellE">ooo</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o. #<span class="GramE">..</span> ..<span class="GramE">o ..o</span></span></p>
<p class="MsoNormal"><span>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">ooo</span></span><br />
#o. ..<span class="GramE">o</span></span></p>
<p class="MsoNormal"><span>Your job is to write a program to<br />
determine if a given font has this property, and if so highlight the pixels.</span></p>
<p class="MsoNormal"><span>The input consists of one or more<br />
test cases, followed by a line containing '</span><span>0</span><span> </span><span>0</span><span> </span><span>0</span><span>' (three zeros) that signals the end<br />
of the input. Each test case begins with a line containing three positive<br />
integers <i>n</i>, <i>r</i>, and <i>c</i>, separated by a space: <i>n</i> is<br />
the number of symbols in the font, <i>r</i> is the number of rows in each grid,<br />
and <i>c</i> is the number of columns in each grid. The next <i>r</i> lines<br />
contain the image of each symbol, using the exact format shown in the examples:<br />
a dot '</span><span>.</span><span>' represents an empty part of the grid, a lowercase '</span><span>o</span><span>'<br />
represents a <span class="GramE">pixel,</span> and adjacent grids are separated<br />
by a space. The total width of each line will be at most 79 characters (not<br />
counting end-of-<span class="SpellE">line</span> characters), and <i>r</i> will<br />
be at most 10. The test cases are implicitly numbered starting with 1.</span></p>
<p class="MsoNormal"><span>For test case <span class="SpellE"><i>i</i></span>,<br />
first output a line that says '</span><span>Test</span><span> <span class="SpellE"><i>i</i></span>'. Then determine if each<br />
symbol can be uniquely identified with one or two pixels. If not, output a line<br />
with the word '</span><span>impossible</span><span>'. Otherwise, output the font in the same format except that<br />
the identifying pixels for each symbol are replaced with '</span><span>#</span><span>'.<br />
</span></p>
<p class="MsoNormal"><span>In general there may be several<br />
different pixels or pixel pairs that uniquely identify a symbol. To ensure that<br />
the output is unique, we add the following definition and rules. When comparing<br />
two pixels, the <i>topmost-leftmost</i> pixel is the one closest to the top of<br />
the grid. If both pixels are on the same row, then the topmost-leftmost is the<br />
one closest to the left of the grid.</span></p>
<p class="MsoNormal"><span>If one pixel will work, highlight<br />
the topmost-leftmost pixel that works. Never highlight a two-pixel solution if<br />
a one-pixel solution is possible. If two pixels are needed, highlight the pair<br />
with the topmost-leftmost pixel. If two or more pairs have the same<br />
topmost-leftmost pixel, highlight the one with the topmost-leftmost <i>other</i><br />
pixel.</span></p>
<p class="MsoNormal"><b><span>Input:</span></b><span></span></p>
<p class="MsoNormal"><span>3<br />
2 <span class="SpellE">2</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span class="GramE"><span>oo</span></span></span><span><br />
<span class="SpellE">oo</span> .o</span></p>
<p class="MsoNormal"><span>o.<br />
.o o.</span></p>
<p class="MsoNormal"><span>3<br />
2 <span class="SpellE">2</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span class="GramE"><span>oo</span></span></span><span><br />
<span class="SpellE">oo</span> .o</span></p>
<p class="MsoNormal"><span>o.<br />
.o <span class="SpellE">oo</span></span></p>
<p class="MsoNormal"><span>5<br />
<span class="SpellE">5</span> 3</span></p>
<p class="MsoNormal"><span>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">oo</span></span>.<br />
<span class="SpellE"><span class="GramE">oo</span></span>. <span class="SpellE">o.o</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.<span class="GramE">o.</span> ..<span class="GramE">o ..o</span> <span class="SpellE">o.o</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">oo</span></span>.</span></p>
<p><span class="SpellE"><span class="GramE">ooo</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o. o<span class="GramE">..</span> ..<span class="GramE">o ..o</span></span></p>
<p class="MsoNormal"><span>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">ooo</span></span></span></p>
<p><span class="SpellE">oo</span>. ..<span class="GramE">o</span></p>
<p class="MsoNormal"><span>1<br />
2 4</span></p>
<p class="MsoNormal"><span>.o<span class="GramE">..</span></span></p>
<p class="MsoNormal"><span>...o</span></p>
<p class="MsoNormal"><span>0<br />
<span class="SpellE">0</span> <span class="SpellE">0</span></span></p>
<p class="MsoNormal"><b><span>Output:</span></b><span></span></p>
<p class="MsoNormal"><span>Test<br />
1</span></p>
<p class="MsoNormal"><span class="GramE"><span>impossible</span></span><span></span></p>
<p class="MsoNormal"><span>Test<br />
2</span></p>
<p class="MsoNormal"><span>#o<br />
#o .o</span></p>
<p class="MsoNormal"><span>#.<br />
.# ##</span></p>
<p class="MsoNormal"><span>Test<br />
3</span></p>
<p class="MsoNormal"><span>.#.<br />
<span class="GramE">.o. #o. <span class="SpellE">oo</span>.</span> <span class="GramE">o</span>.#</span></p>
<p class="MsoNormal"><span>#.<span class="GramE">o .#</span>. ..<span class="GramE">o ..o</span> <span class="SpellE">o.o</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o<span class="GramE">. .</span>o. #o. <span class="SpellE">ooo</span></span></p>
<p class="MsoNormal"><span class="SpellE"><span>o.o</span></span><span><br />
.o. #<span class="GramE">..</span> ..<span class="GramE">o ..o</span></span></p>
<p class="MsoNormal"><span>.o<span class="GramE">. .</span>o. <span class="SpellE"><span class="GramE">ooo</span></span><br />
#o. ..<span class="GramE">o</span></span></p>
<p class="MsoNormal"><span>Test<br />
4</span></p>
<p class="MsoNormal"><span>.#..</span></p>
<p class="MsoNormal"><span>...o</span></p>
<p class="MsoNormal"> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-03-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>